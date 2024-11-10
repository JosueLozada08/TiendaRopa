# Tienda Ropa

¡Bienvenido a la aplicación web de Tienda Ropa! Esta aplicación permite gestionar los productos de una tienda de ropa, incluyendo la creación, edición y eliminación de registros de productos. El proyecto está desarrollado utilizando el framework **Laravel**.

## Características

- Crear, leer, actualizar y eliminar (CRUD) productos.
- Buscar productos por nombre, categoría o ID.
- Interfaz amigable y responsive, utilizando HTML y CSS.
- Validación de formularios para garantizar que los datos ingresados sean correctos.
- Administración de pedidos: ver detalles, procesar pagos y gestionar envíos.
- Sistema de reportes: visualizar estadísticas de ventas y productos más vendidos.

## Tecnologías Utilizadas

- **Laravel**: Framework de PHP para la construcción de aplicaciones web.
- **MySQL**: Base de datos utilizada para almacenar los datos de los productos, pedidos y usuarios.
- **Bootstrap**: Framework CSS para el diseño y la responsividad.
- **JavaScript**: Para el manejo de eventos como los modales y la interactividad en el frontend.
- **Composer**: Para la gestión de dependencias de PHP.

## Instalación

1. **Clona este repositorio en tu máquina local**:

   ```bash
   git clone https://github.com/tu_usuario/tienda-ropa.git
   cd tienda-ropa
   composer install
   php artisan key:generate
   php artisan migrate
   php artisan serve```

## Leer y Editar Productos
- Accede a la sección "Productos" desde el menú de navegación.
- Verás una lista con todos los productos registrados, incluyendo detalles como nombre, precio y stock.
- Puedes hacer clic en "Editar" para modificar cualquier registro de producto.
- Eliminar un Producto
- Ve a la sección "Productos" y selecciona el producto que deseas eliminar.
- Haz clic en el botón "Eliminar" junto al producto para eliminarlo de la base de datos.
## Gestionar Pedidos
- Los administradores pueden acceder a la sección "Pedidos" desde el menú de administración.
- Allí podrán ver los pedidos realizados, procesar pagos y gestionar el estado de envío.
## Ver Reportes
- Accede a la sección "Reportes" para ver estadísticas como las ventas totales, productos más vendidos y otros análisis.
- Estructura del Proyecto
- /app: Contiene el código de la aplicación, incluyendo controladores, modelos y políticas.
- /resources: Archivos de vistas Blade y recursos frontend.
- /routes: Definición de rutas para la aplicación.
- /database: Migraciones y archivos relacionados con la base de datos.
- /public: Contiene los archivos accesibles públicamente, como los assets (imágenes, CSS, JS).



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
