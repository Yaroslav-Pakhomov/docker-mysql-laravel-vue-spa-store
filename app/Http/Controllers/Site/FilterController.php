<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoriesResource;
use App\Http\Resources\Color\ColorsResource;
use App\Http\Resources\Tag\TagsResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;

// use App\Http\Resources\Product\ProductResource;

class FilterController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): JsonResponse
    {
        // Цена
        $maxPrice = (float)Product::query()->max('price');
        $minPrice = (float)Product::query()->min('price');

        // Категории
        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        // Теги
        $allTags = Tag::getAllTagsSite();
        $tags = TagsResource::collection($allTags)->resolve();

        // Цвета
        $allColors = Color::all();
        $colors = ColorsResource::collection($allColors)->resolve();

        $result = [
            'max_price'  => $maxPrice,
            'min_price'  => $minPrice,
            'categories' => $categories,
            'colors'     => $colors,
            'tags'       => $tags,
        ];

        return response()->json($result);
    }
}
