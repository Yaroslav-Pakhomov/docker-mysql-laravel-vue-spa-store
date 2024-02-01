<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ColorController as AdminColorController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', static function () {
    return Inertia::render('Welcome', [
        'canLogin'       => Route::has('login'),
        'canRegister'    => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion'     => PHP_VERSION,
    ]);
})->name('index');

Route::get('/dashboard', static function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->group(function () {
    Route::name('admin.')->group(function () {
        // Главная
        Route::controller(AdminIndexController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });

        // Категории
        Route::resource('category', AdminCategoryController::class)->only(['index', 'create', 'store', 'update']);
        Route::controller(AdminCategoryController::class)->group(function () {
            Route::prefix('/category')->group(function () {
                Route::name('category.')->group(function () {

                    // Страница категории
                    Route::get('/{category:slug}', 'show')->where('category:slug', '[a-z0-9_-]+')->name('show');

                    // Редактирование категории
                    Route::get('/{category:slug}/edit', 'edit')->where('category:slug', '[a-z0-9_-]+')->name('edit');

                    // Удаление категории
                    Route::delete('/{category:slug}', 'delete')->where('category:slug', '[a-z0-9_-]+')->name('delete');
                });
            });
        });

        // Теги
        Route::resource('tag', AdminTagController::class)->only(['index', 'create', 'store', 'update']);
        Route::controller(AdminTagController::class)->group(function () {
            Route::prefix('/tag')->group(function () {
                Route::name('tag.')->group(function () {

                    // Страница тега
                    Route::get('/{tag:slug}', 'show')->where('tag:slug', '[a-z0-9_-]+')->name('show');

                    // Редактирование тега
                    Route::get('/{tag:slug}/edit', 'edit')->where('tag:slug', '[a-z0-9_-]+')->name('edit');

                    // Удаление тега
                    Route::delete('/{tag:slug}', 'delete')->where('tag:slug', '[a-z0-9_-]+')->name('delete');
                });
            });
        });

        // Цвета
        Route::resource('color', AdminColorController::class)->only(['index', 'create', 'store', 'update']);
        Route::controller(AdminColorController::class)->group(function () {
            Route::prefix('/color')->group(function () {
                Route::name('color.')->group(function () {

                    // Страница цвета
                    Route::get('/{color:slug}', 'show')->where('color:slug', '[a-z0-9_-]+')->name('show');

                    // Редактирование цвета
                    Route::get('/{color:slug}/edit', 'edit')->where('color:slug', '[a-z0-9_-]+')->name('edit');

                    // Удаление цвета
                    Route::delete('/{color:slug}', 'delete')->where('color:slug', '[a-z0-9_-]+')->name('delete');
                });
            });
        });

        // Пользователи
        Route::resource('user', AdminUserController::class)->only(['index', 'create', 'store', 'update']);
        Route::controller(AdminUserController::class)->group(function () {
            Route::prefix('/user')->group(function () {
                Route::name('user.')->group(function () {

                    // Страница пользователи
                    Route::get('/{user:email}', 'show')->where('user:email', '[a-z0-9_-]+')->name('show');

                    // Редактирование пользователи
                    Route::get('/{user:email}/edit', 'edit')->where('user:email', '[a-z0-9_-]+')->name('edit');

                    // Удаление пользователи
                    Route::delete('/{user:email}', 'delete')->where('user:email', '[a-z0-9_-]+')->name('delete');
                });
            });
        });

        // Товары
        Route::resource('product', AdminProductController::class)->only(['index', 'create', 'store', 'update',
        ]);
        Route::controller(AdminProductController::class)->group(function () {
            Route::prefix('/product')->group(function () {
                Route::name('product.')->group(function () {

                    // Страница товара
                    Route::get('/{product:slug}', 'show')->where('user:slug', '[a-z0-9_-]+')->name('show');

                    // Редактирование товара
                    Route::get('/{product:slug}/edit', 'show')->where('user:slug', '[a-z0-9_-]+')->name('edit');

                    // Удаление товара
                    Route::delete('/{product:slug}', 'delete')->where('user:slug', '[a-z0-9_-]+')->name('delete');
                });
            });
        });
    });
});


require __DIR__ . '/auth.php';
