<?php

use App\Http\Controllers\admin\AdminCategoriesController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CategoryController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\preventBackHistory;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/order/show', [OrderController::class, 'show'])->name('order.show');
Route::delete('/orderItem/{id}', [OrderController::class, 'destroy'])->name('orderItem.destroy');


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
