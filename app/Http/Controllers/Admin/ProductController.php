<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $allProducts = Product::getAllProducts();

        return view('admin.product.index', compact('allProducts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $categories = Category::getAllCategories();
        $colors = Color::getAllColors();
        $tags = Tag::getAllTags();
        $users = User::getAllUsers();

        return view('admin.product.create', compact('categories', 'colors', 'tags', 'users',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $product = Product::storeProduct($validated);

        return redirect()->route('admin.product.show', $product->slug)->with([
            'flash_message' => "Товар успешно создан",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     *
     * @return View
     */
    public function show(Product $product): View
    {
        $product->query()->with(['category', 'colors', 'tags', 'users']);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     *
     * @return View
     */
    public function edit(Product $product): View
    {
        $product->query()->with(['category', 'colors', 'tags', 'users']);

        $productTags = $product->tags->toArray();
        $productTagIds = [];
        foreach ($productTags as $productTag) {
            $productTagIds[] = $productTag['id'];
        }

        $productColors = $product->colors->toArray();
        $productColorIds = [];
        foreach ($productColors as $productColor) {
            $productColorIds[] = $productColor['id'];
        }

        $productUsers = $product->users->toArray();
        $productUserIds = [];
        foreach ($productUsers as $productUser) {
            $productUserIds[] = $productUser['id'];
        }

        $categories = Category::getAllCategories();
        $colors = Color::getAllColors();
        $tags = Tag::getAllTags();
        $users = User::getAllUsers();

        return view('admin.product.edit', compact('product', 'categories', 'colors', 'tags', 'users', 'productTagIds', 'productColorIds', 'productUserIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product        $product
     *
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->validated();
        $product = Product::updateProduct($validated, $product);

        return redirect()->route('admin.product.show', $product->slug)->with([
            'flash_message' => "Товар успешно отредактирован",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     *
     * @return RedirectResponse
     */
    public function delete(Product $product): RedirectResponse
    {
        Product::deleteProduct($product);

        return redirect()->route('admin.product.index')->with([
            'flash_message' => "Товар успешно удалён",
            'class'         => 'alert alert-success',
        ]);
    }
}
