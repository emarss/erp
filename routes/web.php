<?php

use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SuppliersController;
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
Route::get('/users/page', [UsersController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('users');
Route::get('/employees/page', [EmployeesController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('employees');
Route::get('/properties/page', [PropertiesController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('properties');
Route::get('/stocks/page', [StockController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('stocks');
Route::get('/sales/page', [SalesController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('sales');
Route::get('/suppliers/page', [SuppliersController::class, 'indexPage'])
    ->middleware(['auth', 'department_set'])
    ->name('suppliers');
require __DIR__ . '/auth.php';
