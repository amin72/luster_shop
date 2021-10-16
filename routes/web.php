<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
});

Route::resource('products', ProductsController::class);
Route::get('products/get-price/{slug}', [ProductsController::class, 'getPrice']);