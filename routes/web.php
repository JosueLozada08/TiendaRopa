<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Dashboard para usuarios regulares
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rutas para administradores (requieren autenticación y rol de administrador)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard de administración
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Recursos de administración
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('orders', OrderController::class);
});
