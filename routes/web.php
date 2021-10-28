<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
});


Route::resource('products', ProductsController::class);
Route::get('products/get-price/{slug}', [ProductsController::class, 'getPrice']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
