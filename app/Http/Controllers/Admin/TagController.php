<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $allTags = Tag::getAllTagsAdmin();

        return view('admin.tag.index', compact('allTags'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     *
     * @return RedirectResponse
     */
    public function store(TagRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $tag = Tag::query()->updateOrCreate($validated);

        // dd($tag);
        return redirect()->route('admin.tag.show', $tag->slug)->with([
            'flash_message' => "Тег успешно создан",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     *
     * @return View
     */
    public function show(Tag $tag): View
    {
        return view('admin.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     *
     * @return View
     */
    public function edit(Tag $tag): View
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param Tag        $tag
     *
     * @return RedirectResponse
     */
    public function update(TagRequest $request, Tag $tag): RedirectResponse
    {
        $validated = $request->validated();
        $tag->update($validated);

        return redirect()->route('admin.tag.show', $tag->slug)->with([
            'flash_message' => "Тег успешно обновлён",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     *
     * @return RedirectResponse
     */
    public function delete(Tag $tag): RedirectResponse
    {
        $tag->delete();

        return redirect()->route('admin.tag.index')->with([
            'flash_message' => "Тег успешно удалён",
            'class'         => 'alert alert-success',
        ]);
    }
}
