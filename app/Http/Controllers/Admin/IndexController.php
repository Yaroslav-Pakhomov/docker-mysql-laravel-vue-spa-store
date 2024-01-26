<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * Главная страница Админки
     */
    public function index(): View
    {
        return view('admin.index');
    }
}
