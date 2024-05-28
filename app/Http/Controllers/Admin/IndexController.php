<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
