<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    /**
     * Главная страница Заказов
     *
     * @return View
     */
    public function index(): View
    {
        $allOrder = Order::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.order.index', compact('allOrder'));
    }

    /**
     * Страница Заказов
     *
     * @param Order $order
     *
     * @return View
     */
    public function show(Order $order): View
    {
        $counter_paginate = 10;
        return view('admin.order.show', compact('order', 'counter_paginate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     *
     * @return View
     */
    public function edit(Order $order): View
    {
        return view('admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OrderRequest $request
     * @param Order $order
     *
     * @return RedirectResponse
     */
    public function update(OrderRequest $request, Order $order): RedirectResponse
    {
        $validated = $request->validated();

//        $category->update($validated);
        $order = Order::updateOrder($validated, $order);

        return redirect()->route('admin.order.show', $order->id)->with([
            'flash_message' => "Заказ успешно обновлен",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     *
     * @return RedirectResponse
     */
    public function delete(Order $order): RedirectResponse
    {
        // dd($order);
        $order->delete();

        return redirect()->route('admin.order.index')->with([
            'flash_message' => "Заказ успешно удалена",
            'class'         => 'alert alert-success',
        ]);
    }
}
