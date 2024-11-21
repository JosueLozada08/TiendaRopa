<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalOrders = Order::count();
        $totalRevenue = Order::where('status', 'completado')->sum('total');

        // Ingresos mensuales del año actual
        $currentYearRevenue = Order::selectRaw('MONTH(created_at) as month, SUM(total) as total')
            ->where('status', 'completado')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [date('F', mktime(0, 0, 0, $item->month, 1)) => $item->total];
            });

        // Ingresos mensuales del año pasado
        $lastYearRevenue = Order::selectRaw('MONTH(created_at) as month, SUM(total) as total')
            ->where('status', 'completado')
            ->whereYear('created_at', date('Y') - 1)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [date('F', mktime(0, 0, 0, $item->month, 1)) => $item->total];
            });

        // Productos con bajo stock
        $lowStockProducts = Product::where('stock', '<', 5)->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalOrders',
            'totalRevenue',
            'currentYearRevenue',
            'lastYearRevenue',
            'lowStockProducts'
        ));
    }

    
}
