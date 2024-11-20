@extends('layouts.app')

@section('title', 'Administrar Productos')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Administrar Productos</h1>
    <p class="text-muted">Añade, edita o elimina productos de la tienda.</p>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Lista de Productos</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Crear Producto</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay productos disponibles.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
