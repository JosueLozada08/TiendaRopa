<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Órdenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2>Bienvenido al Panel de Administración</h2>
        <p>Desde este panel puedes gestionar todos los aspectos de la tienda en línea, incluyendo productos, categorías y órdenes.</p>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">Productos</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Productos</h5>
                        <p class="card-text">Añade, edita o elimina productos de la tienda.</p>
                        <a href="#" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">Categorías</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Categorías</h5>
                        <p class="card-text">Organiza los productos en diferentes categorías.</p>
                        <a href="#" class="btn btn-secondary">Ver Categorías</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">Órdenes</div>
                    <div class="card-body">
                        <h5 class="card-title">Administrar Órdenes</h5>
                        <p class="card-text">Revisa y gestiona los pedidos de los clientes.</p>
                        <a href="#" class="btn btn-success">Ver Órdenes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
