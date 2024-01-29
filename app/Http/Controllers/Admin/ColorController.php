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
     * @return View
     */
    public function create(): View
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ColorRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ColorRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['code'] = $validated['code'][0] === "#" ? $validated['code'] : '#' . $validated['code'];
        $color = Color::query()->updateOrCreate($validated);

        return redirect()->route('admin.color.show', $color->slug)->with([
            'flash_message' => "Цвет успешно создан",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Color $color
     *
     * @return View
     */
    public function show(Color $color): View
    {
        return view('admin.color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Color $color
     *
     * @return View
     */
    public function edit(Color $color): View
    {
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ColorRequest $request
     * @param Color        $color
     *
     * @return RedirectResponse
     */
    public function update(ColorRequest $request, Color $color): RedirectResponse
    {
        $validated = $request->validated();
        $validated['code'] = $validated['code'][0] === "#" ? $validated['code'] : '#' . $validated['code'];
        $color->update($validated);

        return redirect()->route('admin.color.show', $color->slug)->with([
            'flash_message' => "Цвет успешно создан",
            'class'         => 'alert alert-success',
        ]);
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
