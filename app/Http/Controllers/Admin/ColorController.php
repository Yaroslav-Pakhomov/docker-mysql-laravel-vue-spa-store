<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorRequest;
use App\Models\Color;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $allColors = Color::getAllColors();

        return view('admin.color.index', compact('allColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color): View
    {
        return view('admin.color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorRequest $request, Color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Color $color
     *
     * @return RedirectResponse
     */
    public function delete(Color $color): RedirectResponse
    {
        $color->delete();

        return redirect()->route('admin.color.index')->with([
            'flash_message' => "Цвет успешно удален",
            'class'         => 'alert alert-success',
        ]);
    }
}
