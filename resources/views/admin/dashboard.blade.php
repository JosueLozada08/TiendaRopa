<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Panel de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.orders.index') }}">Órdenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.products.index') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.categories.index') }}">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.clients.index') }}">Clientes</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="{{ route('logout') }}">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bienvenido al Panel de Administración</h2>
        <p class="text-center">Desde este panel puedes gestionar todos los aspectos de la tienda en línea.</p>

        <!-- Tarjetas de Resumen -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Productos</h5>
                        <p class="card-text display-4">{{ $totalProducts }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Categorías</h5>
                        <p class="card-text display-4">{{ $totalCategories }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Órdenes</h5>
                        <p class="card-text display-4">{{ $totalOrders }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjetas para Gestión -->
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-header">Productos</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Productos</h5>
                        <p class="card-text">Añade, edita o elimina productos de la tienda.</p>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-header">Categorías</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Categorías</h5>
                        <p class="card-text">Organiza los productos en diferentes categorías.</p>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Ver Categorías</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-header">Órdenes</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Órdenes</h5>
                        <p class="card-text">Revisa y gestiona los pedidos de los clientes.</p>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-success">Ver Órdenes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-header">Clientes</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Clientes</h5>
                        <p class="card-text">Gestiona la información de tus clientes.</p>
                        <a href="{{ route('admin.clients.index') }}" class="btn btn-info">Ver Clientes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
