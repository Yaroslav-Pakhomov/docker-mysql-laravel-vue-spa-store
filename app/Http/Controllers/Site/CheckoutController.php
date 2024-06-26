<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoriesResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Inertia\Response;
use Inertia\ResponseFactory;

class CheckoutController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): Response|ResponseFactory
    {
        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        return inertia('Site/Checkout/Index', [
            'categories' => $categories,
            'active'     => true,
        ]);
    }
}
