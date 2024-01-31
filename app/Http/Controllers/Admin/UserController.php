<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $allUsers = User::getAllUsers();

        return view('admin.user.index', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated);

        return redirect()->route('admin.user.show', $user->email)->with([
            'flash_message' => "Пользователь успешно отредактирован",
            'class'         => 'alert alert-success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin.user.index')->with([
            'flash_message' => "Пользователь успешно удалён",
            'class'         => 'alert alert-success',
        ]);
    }
}
