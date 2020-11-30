<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/login', [HomeController::class, 'loginPage'])
        ->middleware('guest')
        ->name('login');
Route::get('/', [HomeController::class, 'loginPage'])
        ->middleware('guest')
        ->name('login');
Route::post('/login', [HomeController::class, 'login'])
        ->name('login.submit')
        ->middleware('guest');
Route::post('/logout', [HomeController::class, 'logout'])
        ->name('logout')
        ->middleware('auth');
