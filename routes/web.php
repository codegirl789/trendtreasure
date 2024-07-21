<?php

use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\frontend\CategoryController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\preventBackHistory;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware('auth', IsAdmin::class, preventBackHistory::class)->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', AdminProductsController::class)->names('admin.product');
    Route::resource('categories', AdminCategoriesController::class)->names('admin.category');
});

require __DIR__ . '/auth.php';
