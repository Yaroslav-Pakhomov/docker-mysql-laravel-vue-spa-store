<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Interfaces\EncodedImageInterface;

/**
 * @property mixed        $tags
 * @property mixed        $colors
 * @property mixed        $users
 * @property mixed|string $main_img
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
     * @param array   $validated
     * @param Product $product
     *
     * @return Product
     */
    public static function updateProduct(array $validated, Product $product): Product
    {
        $validated['is_published'] = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';

        // Теги, цвета, пользователи
        $validated['tags'] = $validated['tags'] ?? [];
        $product->tags()->sync($validated['tags']);
        $validated['colors'] = $validated['colors'] ?? [];
        $product->colors()->sync($validated['colors']);
        $validated['users'] = $validated['users'] ?? [];
        $product->users()->sync($validated['users']);
        unset($validated['tags'], $validated['colors'], $validated['users']);

        // Категория
        if ((int)$validated['category_id'] === 0) {
            unset($validated['category_id'],);
        }

        // Сохраняем изображения превью и основное
        self::uploadImage($validated['img'], $product);
        unset($validated['img'],);

        $product->update($validated);

        return $product;
    }

    /**
     * @param array $validated
     *
     * @return Model
     */
    public static function storeProduct(array $validated): Model
    {
        $validated['is_published'] = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';
        $tags = $validated['tags'];
        $colors = $validated['colors'];
        $users = $validated['users'];

        unset($validated['tags'], $validated['colors'], $validated['users']);
        if ((int)$validated['category_id'] === 0) {
            unset($validated['category_id'],);
        }

        $product = self::query()->updateOrCreate($validated);
        $product->tags()->sync($tags);
        $product->colors()->sync($colors);
        $product->users()->sync($users);

        return $product;
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
            $image = self::setResizeImage($orig_img, 1200, 600);

            // сохраняем это изображение под именем $name.jpg в директории public/images/images
            Storage::put('public/images/main_img/' . $name . '.jpg', $image);
            // $image->destroy();
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
            $thumbnail = self::setResizeImage($orig_img, 600, 300);
            // сохраняем это изображение под именем $name.jpg в директории public/img/thumb
            Storage::put('public/images/prev_img/' . $name . '.jpg', $thumbnail);
            // $thumbnail->destroy();
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
        // $image = Image::make($orig_img);
        $resizeHeight = $image->height();
        $resizeWidth = $image->width();

        // Размер width x height
        if ($resizeWidth > $width && $resizeHeight > $height) {
            // Изменяет размер изображения так, чтобы самая большая сторона соответствовала ограничению; меньшая сторона будет масштабирована для сохранения исходного соотношения сторон
            $image->coverDown($width, $height);
        } else {
            // Изменяет размер границ текущего изображения на заданную ширину и высоту, фоновый цвет чёрный
            $image->resizeCanvas($width, $height, '000000', 'center');
        }

        // Кодируем текущее изображение в jpg, качество 100%
        return $image->toJpeg(90);
    }
}
