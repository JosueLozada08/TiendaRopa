<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;

// Ruta principal de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Formulario de inicio de sesión
Route::post('/login', [LoginController::class, 'login']); // Proceso de inicio de sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Cierre de sesión

// Dashboard para usuarios regulares (autenticados)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rutas para administradores (autenticados)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard de administración
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Gestión de productos
    Route::resource('products', ProductController::class);

    // Gestión de categorías
    Route::resource('categories', CategoryController::class);

    // Gestión de órdenes
    Route::resource('orders', OrderController::class);

    // Ruta para completar órdenes
    Route::put('orders/{order}/complete', [OrderController::class, 'complete'])->name('orders.complete');
});
