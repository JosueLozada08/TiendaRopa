<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Retorna la vista principal del panel de administrador
        return view('admin.dashboard');
    }
}

