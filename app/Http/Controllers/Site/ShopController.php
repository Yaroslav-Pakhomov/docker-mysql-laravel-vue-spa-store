<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoriesResource;
//use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Color\ColorsResource;
use App\Http\Resources\Tag\TagsResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Inertia\Response;
use Inertia\ResponseFactory;

class ShopController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): Response|ResponseFactory
    {
        // Продукты
        $products = Product::query()->orderBy('updated_at', 'desc')->with(['category'])->paginate(24);
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
}
