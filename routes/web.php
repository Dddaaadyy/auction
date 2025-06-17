<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;

Route::middleware(['web'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main');

    // Auth routes
    Route::middleware('guest')->group(function () {
        Route::post('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
        Route::get('/cart', [CartController::class, 'show'])->name('cart');
        Route::get('/my-lots', [LotController::class, 'myLots'])->name('my-lots');
        Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    });

    Route::get('/lot/{id}', [LotController::class, 'show'])->name('lot.show');
});
