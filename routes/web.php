<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;

Route::get('/welcome', [HomeController::class, 'Welcome'])
    ->middleware('auth')
    ->name('welcome');
Route::get('/start/{department}', [HomeController::class, 'start'])
    ->middleware(['auth'])
    ->name('start');
Route::get('/dashboard', [HomeController::class, 'dashboard'])
    ->middleware(['auth', 'department_set'])
    ->name('dashboard');
Route::get('/products', [ProductsController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('products');
Route::get('/profile', [ProfileController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('profile');
Route::get('/settings', [SettingsController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('settings');


require __DIR__ . '/auth.php';
