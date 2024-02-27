<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoriesResource;
use App\Http\Resources\Category\CategoriesResourceFull;
use App\Http\Resources\Color\ColorsResource;
use App\Http\Resources\Product\ProductResourceFull;
use App\Http\Resources\Tag\TagsResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Inertia\Response;
use Inertia\ResponseFactory;

// use App\Http\Resources\Product\ProductResource;

class ShopController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): Response|ResponseFactory
    {
        // Продукты
        $products = Product::query()->orderBy('updated_at', 'desc')->with(['category',])->paginate(24);
        $max_price = (float)Product::query()->max('price');
        $min_price = (float)Product::query()->min('price');
        // $products = ProductResource::collection($allProducts)->resolve();

        // Категории
        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        // Теги
        $allTags = Tag::getAllTagsSite();
        $tags = TagsResource::collection($allTags)->resolve();

        // Цвета
        $allColors = Color::all();
        $colors = ColorsResource::collection($allColors)->resolve();

        return inertia('Site/Shop/Index', [
            'products'   => $products,
            'max_price'  => $max_price,
            'min_price'  => $min_price,
            'categories' => $categories,
            'tags'       => $tags,
            'colors'     => $colors,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     *
     * @return array
     */
    public function show(Product $product): array
    {
        $productTest = ProductResourceFull::make($product)->resolve();
//        return $product->query()->with(['category', 'colors', 'tags', 'users']);

        // Цвета
        $product_colors = $productTest['colors'];
        unset($productTest['colors']);
        foreach ($product_colors as $colors) {
            foreach ($colors as $color) {
                if (!empty($color)) {
                    $productTest['colors'][] = ColorsResource::make($color)->resolve();
                }
            }
        }
        if (!isset($productTest['colors'])) {
            $productTest['colors'] = [];
        }

        // Теги
        $product_tags = $productTest['tags'];
        unset($productTest['tags']);
        foreach ($product_tags as $tags) {
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    $productTest['tags'][] = TagsResource::make($tag)->resolve();
                }
            }
        }
        if (!isset($productTest['tags'])) {
            $productTest['tags'] = [];
        }

        // Категория
        $product_category = $productTest['category'] ?? [];
        unset($productTest['category']);
        foreach ($product_category as $category) {
            if (!empty($category)) {
                $productTest['category'] = CategoriesResourceFull::make($category)->resolve();
            }
        }

        return $productTest;
    }
}
