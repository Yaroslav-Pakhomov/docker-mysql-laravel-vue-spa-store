<?php

declare(strict_types=1);

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Inertia\Response;
use Inertia\ResponseFactory;

class IndexController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): Response|ResponseFactory
    {
        $allProducts = Product::query()->orderBy('updated_at', 'desc')->limit(9)->get();
//        dd($allProducts);
        $products = ProductResource::collection($allProducts)->resolve();

        return inertia('Site/Index', [
            'products' => $products,
        ]);
    }
}
