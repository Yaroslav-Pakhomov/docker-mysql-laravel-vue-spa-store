<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Filters\Classic\ProductFilter;
use App\Http\Requests\Site\ShopFilterRequest;
use App\Http\Resources\Category\CategoriesResource;
use App\Http\Resources\Category\CategoriesResourceFull;
use App\Http\Resources\Color\ColorsResource;
use App\Http\Resources\Product\ProductResourceFull;
use App\Http\Resources\Tag\TagsResource;
use App\Models\Category;
use App\Models\Product;
use Inertia\Response;
use Inertia\ResponseFactory;

class ShopController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(ShopFilterRequest $request): Response|ResponseFactory
    {
        /**
         * Отвалидированный запрос фильтров
         */
        $requestFilter = $request->validated();

        /**
         * Объект фильтра для товара
         */
        $productFilter = new ProductFilter($requestFilter);

        /**
         * Продукты, перебор всех фильтров из запроса,
         * Метод filters() реализован scope подходом Laravel
         * Подключается к модели Product с помощью трейта HasFilter
         */
        $productQuery = Product::filters($productFilter);
        $products = $productQuery->orderBy('updated_at', 'desc')->with(['category',])->paginate(24);

        // Категории
        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();


        return inertia('Site/Shop/Index', [
            'products'       => $products,
            'categories'     => $categories,
            'request_filter' => $requestFilter,
            'active'         => TRUE,
        ]);
    }

    /**
     * Страница товара "Модальное окно"
     *
     * @param Product $product
     *
     * @return array
     */
    public function show(Product $product): array
    {
        $productModal = ProductResourceFull::make($product)->resolve();

        // Цвета
        $productColors = $productModal['colors'];
        unset($productModal['colors']);
        foreach ($productColors as $colors) {
            foreach ($colors as $color) {
                if (!empty($color)) {
                    $productModal['colors'][] = ColorsResource::make($color)->resolve();
                }
            }
        }
        if (!isset($productModal['colors'])) {
            $productModal['colors'] = [];
        }

        // Теги
        $productTags = $productModal['tags'];
        unset($productModal['tags']);
        foreach ($productTags as $tags) {
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    $productModal['tags'][] = TagsResource::make($tag)->resolve();
                }
            }
        }
        if (!isset($productModal['tags'])) {
            $productModal['tags'] = [];
        }

        // Категория
        $productCategory = $productModal['category'] ?? [];
        unset($productModal['category']);
        foreach ($productCategory as $category) {
            if (!empty($category)) {
                $productModal['category'] = CategoriesResourceFull::make($category)->resolve();
            }
        }

        return $productModal;
    }
}
