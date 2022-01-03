<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\UserActivateController;
use App\Http\Controllers\Auth\SendActiviteTokenController;
use App\Http\Controllers\Auth\PasswordResetTokenController;
use App\Http\Controllers\Auth\ChangePhoneController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;


Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
     ->middleware(['guest', 'throttle:3,1']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
      ->middleware(['guest', 'throttle:3,1']);

Route::get('/forgot-password', [PasswordResetController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetController::class, 'store'])
    ->middleware('guest')
    ->name('password.phone');

Route::get('/password-reset-token', [PasswordResetTokenController::class, 'create'])
    ->middleware('guest')
    ->name('password_reset_token');

Route::post('/password-reset-token', [PasswordResetTokenController::class, 'store'])
    ->middleware('guest')
    ->name('password_reset_token');

Route::put('/password-reset-token', [PasswordResetTokenController::class, 'update'])
    ->middleware('guest')
    ->name('password_reset_token');

Route::get('/reset-password', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/user_activate', [UserActivateController::class, 'create'])
    ->middleware('auth')
    ->name('user_activate');

Route::post('/user_activate', [UserActivateController::class, 'store'])
    ->middleware(['auth', 'throttle:3,1'])
    ->name('user_activate');

Route::put('/user_activate', [UserActivateController::class, 'update'])
    ->middleware(['auth', 'throttle:3,1'])
    ->name('user_activate');

Route::get('/change_phone', [ChangePhoneController::class, 'edit'])
    ->middleware('auth')
    ->name('change_phone');

Route::get('/verify-phone', [ChangePhoneController::class, 'verify_phone'])
    ->middleware('auth')
    ->name('verify_phone');

Route::post('/change_phone', [ChangePhoneController::class, 'store'])
    ->middleware(['auth', 'throttle:3,1'])
    ->name('change_phone');

Route::put('/change_phone', [ChangePhoneController::class, 'update'])
    ->middleware(['auth', 'throttle:30,1'])
    ->name('change_phone');

Route::get('/change_password', [ChangePasswordController::class, 'edit'])
    ->middleware('auth')
    ->name('change_password');

Route::put('/change_password', [ChangePasswordController::class, 'update'])
    ->middleware(['auth', 'throttle:3,1'])
    ->name('change_password');
