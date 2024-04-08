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

class ProductController extends Controller
{
    /**
     * Страница товара "На сайте"
     *
     * @param Product $product
     *
     * @return Response|ResponseFactory
     */
    public function show(Product $product): Response|ResponseFactory
    {
        $productDetail = ProductResourceFull::make($product)->resolve();

        // Цвета
        $productColors = $productDetail['colors'];
        unset($productDetail['colors']);
        foreach ($productColors as $colors) {
            foreach ($colors as $color) {
                if (!empty($color)) {
                    $productDetail['colors'][] = ColorsResource::make($color)->resolve();
                }
            }
        }
        if (!isset($productDetail['colors'])) {
            $productDetail['colors'] = [];
        }

        // Теги
        $productTags = $productDetail['tags'];
        unset($productDetail['tags']);
        foreach ($productTags as $tags) {
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    $productDetail['tags'][] = TagsResource::make($tag)->resolve();
                }
            }
        }
        if (!isset($productDetail['tags'])) {
            $productDetail['tags'] = [];
        }

        // Категория
        $productCategory = $productDetail['category'] ?? [];
        unset($productDetail['category']);
        foreach ($productCategory as $category) {
            if (!empty($category)) {
                $productDetail['category'] = CategoriesResourceFull::make($category)->resolve();
            }
        }

        // Категории
        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();


        return inertia('Site/Shop/DetailProduct', [
            'categories'    => $categories,
            'productDetail' => $productDetail,
            'active'        => TRUE,
        ]);
    }
}
