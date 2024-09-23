<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoriesResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Response;
use Inertia\ResponseFactory;

class IndexController extends Controller
{
    /**
     * Главная страница Сайта
     *
     * @return Response|ResponseFactory
     */
    public function index(): Response|ResponseFactory
    {
        $allProducts = Product::query()->orderBy('updated_at', 'desc')->limit(9)->get();
        $products = ProductResource::collection($allProducts)->resolve();

        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        // Запись в кэш, если ключ не существует
        $value_categories = Cache::rememberForever('value_categories', static function () use ($categories) {
            return $categories;
        });

        // Получение значение кэша по его ключу
        $value_categories_get = Cache::get('value_categories');

        return inertia('Site/Index', [
            'products'   => $products,
            'categories' => $categories,
            'active'     => true,
        ]);
    }

    /**
     * Поиск Сайта
     *
     * @param Request $request
     *
     * @return Response|ResponseFactory
     */
    public function search(Request $request): Response|ResponseFactory
    {
        // dd($request->all());
        // $products = [];
        $params = $request->all();
        unset($params["page"]);

        $category_id = (int)$params["selected_search"];
        $search_value = (string)$params["input_search"];

        $query = Product::query();

        $query->where('title', 'like', "%{ $search_value }%")
            ->orWhere('description', 'like', "%{ $search_value }%")
            ->orWhere('content', 'like', "%{ $search_value }%");
        // $query->whereAny([
        //     'title',
        //     'description',
        //     'content',
        // ], 'LIKE', "%{$search_value}%");
        if ($category_id !== 0) {
            $query->where('category_id', $category_id);
        }
        $products = $query->with(['category',])->paginate(9);

        // $products = $productQuery->orderBy('updated_at', 'desc')->with(['category',])->paginate(24);

        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        return inertia('Site/Shop/Index', [
            'products'       => $products,
            'categories'     => $categories,
            'request_filter' => $params,
            'active'         => TRUE,
        ]);
    }
}
