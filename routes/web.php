<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta personalizada para cerrar sesión con GET (opcional)
Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login')->with('success', 'Has cerrado sesión correctamente.');
})->name('logout_get');

// Rutas para usuarios regulares (dashboard general)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rutas para administradores (dashboard y gestión de recursos)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard de administración
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Gestión de órdenes
    Route::resource('orders', OrderController::class);

    // Gestión de productos
    Route::resource('products', ProductController::class);

    // Gestión de categorías
    Route::resource('categories', CategoryController::class);

    // Gestión de clientes
    /* Route::resource('clients', ClientController::class); */
});
