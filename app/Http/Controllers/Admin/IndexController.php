<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SearchRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): View
    {
        $countOrders = Order::query()->orderBy('id', 'desc')->count();
        $countProducts = Product::query()->orderBy('id', 'desc')->count();
        $countUsers = User::query()->orderBy('id', 'desc')->count();
        $countCategories = Category::query()->orderBy('id', 'desc')->count();

        return view('admin.index', compact('countOrders', 'countProducts', 'countUsers', 'countCategories'));
    }

    /**
     * Страница поиска Админки
     */
    public function search(SearchRequest $request): View
    {
        $countOrders = Order::query()->orderBy('id', 'desc')->count();
        $countProducts = Product::query()->orderBy('id', 'desc')->count();
        $countUsers = User::query()->orderBy('id', 'desc')->count();
        $countCategories = Category::query()->orderBy('id', 'desc')->count();

        $validated = $request->validated();
        $search_value = $validated['search_value'];
        // $search_value = $validated;

        $result_search = Product::query()
            ->where('title', 'like', "%{$search_value}%")
            ->orWhere('description', 'like', "%{$search_value}%")
            ->orWhere('content', 'like', "%{$search_value}%")
            ->paginate(9);
        // $result_search = Product::getSearch($search_value);

        return view('admin.search', compact('countOrders', 'countProducts', 'countUsers', 'countCategories', 'validated', 'result_search'));
    }

}
