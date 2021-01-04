<?php

use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\DepartmentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UnitOfMeasuresController;
use App\Http\Controllers\UserRolesController;
use App\Http\Controllers\UsersController;

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
Route::get('/currencies', [CurrenciesController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('currencies');
Route::get('/user-roles', [UserRolesController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('user-roles');
Route::get('/unit-of-measures', [UnitOfMeasuresController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('unit-of-measures');
Route::get('/payment-methods', [PaymentMethodsController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('payment-methods');
Route::get('/departments', [DepartmentsController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('departments');
Route::get('/users', [UsersController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('users');
require __DIR__ . '/auth.php';
