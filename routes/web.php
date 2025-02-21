<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->group(function () {
    // Guest routes
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [LoginController::class, 'login']);
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
        Route::post('/register', [RegisterController::class, 'register']);
    });

    // Authenticated admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});

// Default user routes (from Breeze)
Auth::routes();
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
