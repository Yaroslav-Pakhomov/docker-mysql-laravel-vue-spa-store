<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Interfaces\EncodedImageInterface;

/**
 * @property mixed        $id
 * @property mixed        $tags
 * @property mixed        $colors
 * @property mixed        $users
 * @property mixed|string $main_img
 * @property mixed        $slug
 * @property mixed        $title
 * @property mixed        $category_id
 * @property mixed        $description
 * @property mixed        $content
 * @property mixed        $price
 * @property mixed        $old_price
 * @property mixed        $count
 * @property bool|mixed   $is_published
 * @property mixed|string $prev_img
 */
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * @return LengthAwarePaginator
     */
    public static function getAllProducts(): LengthAwarePaginator
    {
        return self::query()->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'categories');
    }

    /**
     * @return BelongsToMany
     */
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class, 'color_products', 'product_id', 'color_id');
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'product_users', 'product_id', 'user_id');
    }

    /**
     * @return HasMany
     */
    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    /**
     * Обновление товара
     *
     * @param array   $validated
     * @param Product $product
     *
     * @return Product
     */
    public static function updateProduct(array $validated, Product $product): Product
    {
        $validated['is_published'] = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';

        $product_images = $validated['product_images'] ?? [];
        ProductImage::updateProductImages($product_images, $product);

        // Теги, цвета, пользователи
        $validated['tags'] = $validated['tags'] ?? [];
        $product->tags()->sync($validated['tags']);
        $validated['colors'] = $validated['colors'] ?? [];
        $product->colors()->sync($validated['colors']);
        $validated['users'] = $validated['users'] ?? [];
        $product->users()->sync($validated['users']);
        unset($validated['tags'], $validated['colors'], $validated['users'], $validated['product_images']);

        // Категория
        if ((int)$validated['category_id'] === 0) {
            unset($validated['category_id'],);
        }

        // Сохраняем изображения превью и основное
        if (isset($validated['img'])) {
            self::removeImage($product);
            self::uploadImage($validated['img'], $product);
        }
        unset($validated['img'],);

        $product->update($validated);

        return $product;
    }

    /**
     * Создание товара
     *
     * @param array $validated
     *
     * @return Model
     */
    public static function storeProduct(array $validated): Model
    {
        $product = new Product();
        $product->title = $validated['title'];
        $product->slug = $validated['slug'];
        $product->description = $validated['description'];
        $product->content = $validated['content'];
        $product->price = $validated['price'];
        $product->old_price = $validated['old_price'];
        $product->count = $validated['count'];
        $product->is_published = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';
        $product->category_id = isset($validated['category_id']) && (int)$validated['category_id'] === 0 ? NULL : $validated['category_id'];

        // Сохраняем изображения превью и основное
        if (isset($validated['img'])) {
            self::uploadImage($validated['img'], $product);
        }
        $product->save();

        $tags = $validated['tags'] ?? [];
        $colors = $validated['colors'] ?? [];
        $users = $validated['users'] ?? [];

        $product->tags()->attach($tags);
        $product->colors()->attach($colors);
        $product->users()->attach($users);

        $product_images = $validated['product_images'] ?? [];
        ProductImage::createProductImages($product_images, $product);

        return $product;
    }

    /**
     * Удаление товара
     *
     * @param Product $product
     *
     * @return void
     */
    public static function deleteProduct(Product $product): void
    {
        $product->colors()->detach();
        $product->tags()->detach();
        $product->users()->detach();
        self::removeImage($product);

        $product->update();
        $product->delete();
    }


    /**
     * Загрузка изображения при создании поста
     *
     * @param object  $orig_img
     * @param Product $product
     *
     * @return void
     */
    public static function uploadImage(object $orig_img, Product $product): void
    {
        // если было загружено новое изображение
        if ($orig_img) {
            // уникальное имя файла
            $name = md5(Carbon::now() . '_' . $orig_img->getClientOriginalName());
            // расширение файла
            $ext = $orig_img->getClientOriginalExtension();
            // сохраним его в storage/images/original
            Storage::putFileAs('public/images/original', $orig_img, $name . '.' . $ext);

            //---------------------------------------------
            // Основное изображение - начало
            // Размер 1200x400
            //---------------------------------------------
            // создаем jpg изображение для списка постов блога размером 1200x400, качество 100%
            $main_img = self::setResizeImage($orig_img, 1200, 600);
            // сохраняем это изображение под именем $name.jpg в директории public/images/images
            Storage::put('public/images/main_img/' . $name . '.jpg', $main_img);
            // записываем путь в БД
            $product->main_img = Storage::url('public/images/main_img/' . $name . '.jpg');
            //---------------------------------------------
            // Основное изображение - конец
            //---------------------------------------------

            //---------------------------------------------
            // Анонс изображение - начало
            // Размер 600x200
            //---------------------------------------------
            // создаем jpg изображение для списка постов блога размером 600x200, качество 100%
            $prev_img = self::setResizeImage($orig_img, 600, 300);
            // сохраняем это изображение под именем $name.jpg в директории public/img/thumb
            Storage::put('public/images/prev_img/' . $name . '.jpg', $prev_img);
            // записываем путь в БД
            $product->prev_img = Storage::url('public/images/prev_img/' . $name . '.jpg');
            //---------------------------------------------
            // Анонс изображение - конец
            //---------------------------------------------
        }
    }

    /**
     * Создаёт jpg изображения заданных размеров
     *
     * @param object $orig_img
     * @param int    $width
     * @param int    $height
     *
     * @return EncodedImageInterface
     */
    public static function setResizeImage(object $orig_img, int $width, int $height): EncodedImageInterface
    {
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($orig_img);
        $resizeHeight = $image->height();
        $resizeWidth = $image->width();

        // Размер width x height
        if ($resizeWidth > $width && $resizeHeight > $height) {
            // Изменяет размер изображения так, чтобы самая большая сторона соответствовала ограничению; меньшая сторона будет масштабирована для сохранения исходного соотношения сторон
            $image->coverDown($width, $height);
        } else {
            // Изменяет размер границ текущего изображения на заданную ширину и высоту, фоновый цвет чёрный
            $image->resizeCanvas($width, $height, '000000');
        }

        // Кодируем текущее изображение в jpg, качество 100%
        return $image->toJpeg(90);
    }

    /**
     * Удаление изображения при обновлении и удалении поста
     *
     * @param Product $product
     *
     * @return void
     */
    public static function removeImage(Product $product): void
    {
        // Основное изображение
        if (!empty($product->main_img)) {
            $name = basename($product->main_img);
            if (Storage::exists('public/images/main_img/' . $name)) {
                Storage::delete('public/images/main_img/' . $name);
            }
            $product->main_img = NULL;
        }
        // Анонс-изображение
        if (!empty($product->prev_img)) {
            $name = basename($product->prev_img);
            if (Storage::exists('public/images/prev_img/' . $name)) {
                Storage::delete('public/images/prev_img/' . $name);
            }
            $product->prev_img = NULL;
        }

        if (!empty($name)) {
            // Все изображения директорий
            $images = Storage::files('public/images/original');

            // берём имя файла без расширения
            $base = pathinfo($name, PATHINFO_FILENAME);

            foreach ($images as $img) {
                $temp = pathinfo($img, PATHINFO_FILENAME);
                if ($temp === $base) {
                    Storage::delete($img);
                    break;
                }
            }
        }
    }
}
