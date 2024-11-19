<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        // Datos simulados o consulta a la base de datos
        $totalProducts = Product::count(); // Número total de productos
        $totalCategories = Category::count(); // Número total de categorías

        return view('admin.dashboard', [
            'totalProducts' => $totalProducts,
            'totalCategories' => $totalCategories,
        ]);
    }
}
