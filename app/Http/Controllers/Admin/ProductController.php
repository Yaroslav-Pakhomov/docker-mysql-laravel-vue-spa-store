<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
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
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
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
        $product->query()->with('category');

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
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
        $product->delete();

        return redirect()->route('admin.product.index')->with([
            'flash_message' => "Товар успешно удалён",
            'class'         => 'alert alert-success',
        ]);
        //
    }
}
