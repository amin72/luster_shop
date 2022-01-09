<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
});


Route::name('contact.')->group(function () {
    Route::get('/contact', [ContactController::class, 'create'])->name('create');
    Route::post('/contact', [ContactController::class, 'store'])->name('store');
});


Route::resource('products', ProductsController::class);
Route::get('products/get-price/{slug}', [ProductsController::class, 'getPrice']);


Route::resource('shop', ShopController::class);


Route::resource('checkout', CheckoutController::class);


Route::name('checkout.')->group(function() {
    Route::get('checkout', [CheckoutController::class, 'index'])
        ->middleware('user_active')
        ->name('index');

    Route::post('checkout', [CheckoutController::class, 'store'])
        ->middleware('user_active')
        ->name('store');

    Route::get('verify', [CheckoutController::class, 'verify'])
        ->middleware('user_active')
        ->name('verify');
    
    Route::get('payment_done', [CheckoutController::class, 'payment_done'])
        ->middleware('user_active')
        ->name('payment_done');

    Route::get('payment_canceled', [CheckoutController::class, 'payment_canceled'])
        ->middleware('user_active')
        ->name('payment_canceled');
});


Route::name('dashboard.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->middleware('user_active')
        ->name('index');
    
    Route::post('update_info', [DashboardController::class, 'update_info'])
        ->middleware('user_active')
        ->name('update_info');
    
    Route::post('update_address', [DashboardController::class, 'update_address'])
        ->middleware('user_active')
        ->name('update_address');
});


Route::name('cart.')->group(function() {
    Route::get('cart', [CartController::class, 'index'])->name('index');
    Route::post('cart', [CartController::class, 'store'])->name('store');
    Route::put('cart/{id}/{action}', [CartController::class, 'update'])->name('update');
    Route::delete('cart/{id}', [CartController::class, 'destroy'])->name('destroy');
});


require __DIR__.'/auth.php';
