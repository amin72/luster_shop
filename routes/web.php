<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::name('pages.')->group(function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
});