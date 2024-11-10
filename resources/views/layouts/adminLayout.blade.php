<!-- resources/views/layouts/admin_layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- CSS de Bootstrap (opcional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h2>Admin Panel</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.products.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.categories.index') }}">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.orders.index') }}">Órdenes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Volver al Sitio</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100 mt-2">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <main class="flex-grow-1 p-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts de Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
