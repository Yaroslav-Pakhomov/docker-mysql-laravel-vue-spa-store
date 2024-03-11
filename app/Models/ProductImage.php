<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Interfaces\EncodedImageInterface;

/**
 * @property mixed        $product_id
 * @property mixed|string $main_gallery
 * @property mixed|string $prev_gallery
 */
class ProductImage extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'product_images';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * @param array   $images
     * @param Product $product
     *
     * @return array
     */
    public static function createProductImages(array $images, Product $product): array
    {
        $productImageObjs = [];

        foreach ($images as $image) {
            $productImage = new ProductImage();
            $productImage->product_id = $product->id;
            self::uploadImage($image, $productImage);
            $productImage->save();

            $productImageObjs[] = $productImage;
        }

        return $productImageObjs;
    }


    /**
     * @param array   $images
     * @param Product $product
     *
     * @return array
     */
    public static function updateProductImages(array $images, Product $product): array
    {
        $productImageExists = self::query()->where('product_id', $product->id)->get();
        if (count($productImageExists) > 0) {
            foreach ($productImageExists as $productImageExist) {
                self::removeImage($productImageExist);
                $productImageExist->delete();
            }
        }

        $productImageObjs = [];
        foreach ($images as $image) {
            $productImage = new ProductImage();
            $productImage->product_id = $product->id;
            self::uploadImage($image, $productImage);
            $productImage->save();

            $productImageObjs[] = $productImage;
        }

        return $productImageObjs;
    }

    /**
     * Загрузка изображения при создании поста
     *
     * @param object       $orig_img
     * @param ProductImage $productImage
     *
     * @return void
     */
    public static function uploadImage(object $orig_img, ProductImage $productImage): void
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
            $productImage->main_gallery = Storage::url('public/images/main_img/' . $name . '.jpg');
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
            $productImage->prev_gallery = Storage::url('public/images/prev_img/' . $name . '.jpg');
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
     * @param ProductImage $productImage
     *
     * @return void
     */
    public static function removeImage(ProductImage $productImage): void
    {
        // Основное изображение
        if (!empty($productImage->main_gallery)) {
            $name = basename($productImage->main_gallery);
            if (Storage::exists('public/images/main_img/' . $name)) {
                Storage::delete('public/images/main_img/' . $name);
            }
            $productImage->main_gallery = NULL;
        }
        // Анонс-изображение
        if (!empty($productImage->prev_gallery)) {
            $name = basename($productImage->prev_gallery);
            if (Storage::exists('public/images/prev_img/' . $name)) {
                Storage::delete('public/images/prev_img/' . $name);
            }
            $productImage->prev_gallery = NULL;
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
