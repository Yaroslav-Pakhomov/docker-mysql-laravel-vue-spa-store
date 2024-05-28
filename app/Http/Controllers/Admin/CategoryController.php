<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $allCategories = Category::getAllCategoriesAdmin();

        return view('admin.category.index', compact('allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $category = Category::query()->updateOrCreate($validated);

        return redirect()->route('admin.category.show', $category->slug)->with([
            'flash_message' => "Категория успешно создана",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     *
     * @return View
     */
    public function show(Category $category): View
    {
        $counter_paginate = 10;
        return view('admin.category.show', compact('category', 'counter_paginate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     *
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category        $category
     *
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $validated = $request->validated();
        $category->update($validated);

        return redirect()->route('admin.category.show', $category->slug)->with([
            'flash_message' => "Категория успешно обновлена",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function delete(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('admin.category.index')->with([
            'flash_message' => "Категория успешно удалена",
            'class'         => 'alert alert-success',
        ]);
    }
}
