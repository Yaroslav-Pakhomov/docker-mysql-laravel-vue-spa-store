<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\OrderRequest;
use App\Http\Resources\Category\CategoriesResource;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Inertia\Response;
use Inertia\ResponseFactory;

class OrderController extends Controller
{
    /**
     * @param OrderRequest $request
     *
     * @return Response|ResponseFactory
     */
    public function saveOrder(OrderRequest $request): Response|ResponseFactory
    {
        $validated = $request->validated();

        $password = Hash::make('1234');

        $user = User::query()->firstOrCreate([
            'email' => $validated['email'],
        ], [
            "name"       => $validated['name'] ?? '',
            "patronymic" => $validated['patronymic'] ?? '',
            "surname"    => $validated['surname'] ?? '',
            'email'      => $validated['email'],
            'password'   => $password,
        ]);

        $user_id = $user->id;

        $order = Order::query()->create([
            'company_name'      => $validated['company_name'] ?? '',
            'address'           => $validated['address'] . ' ' . $validated['apartment'],
            'city'              => $validated['city'] ?? '',
            'country'           => $validated['selected_country'] ?? '',
            'post_code'         => (int)$validated['post_code'],
            'user_id'           => $user_id,
            'surname_fact'      => $validated['surname_fact'],
            'name_fact'         => $validated['name_fact'],
            'patronymic_fact'   => $validated['patronymic_fact'],
            'company_name_fact' => $validated['company_name_fact'],
            'address_fact'      => !empty($validated['apartment_fact']) ? $validated['address_fact'] . ', ' . $validated['apartment_fact'] : $validated['address_fact'],
            'city_fact'         => $validated['city_fact'] ?? '',
            'country_fact'      => $validated['selected_country_fact']  ?? '',
            'post_code_fact'    => isset($validated['post_code_fact']) ? (int)$validated['post_code_fact'] : 0,
            'notes'             => $validated['notes'] ?? '',
        ]);

        $order_id = $order->id;
        $cart_products = $validated['cart_products'] ?? [];

        foreach ($cart_products as $cart_product) {
            OrderItem::query()->create([
                'title_product' => $cart_product['title'],
                'price'         => (float)$cart_product['price'],
                'quantity'      => (int)$cart_product['qty'],
                'cost'          => (float)$cart_product['price'] * (int)$cart_product['qty'],
                'order_id'      => $order_id,
                'product_id'    => $cart_product['id'],
            ]);
        }

        $allCategories = Category::getAllCategoriesSite();
        $categories = CategoriesResource::collection($allCategories)->resolve();

        return inertia('Site/Cart/Index', [
            'categories' => $categories,
            'active'     => true,
            'reset_cart' => true,
        ]);
    }
}
