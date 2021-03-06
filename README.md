<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Instalaci??n:

1. Clonar el proyecto en `C:\laragon\www`: `git clone https://github.com/EdR13/MexMobile.git`
2. Cambiarse al directorio del proyecto: `cd MexMobile`
3. Instalar dependiencias mediante composer: `composer install`
4. Usar el comando: `npm install`
5. Crear archivo de variables de entorno: `cp .env.example .env`
6. Crear llave: `php artisan key:generate`
7. Configurar los datos del Mailgun o tu servidor de correo en el archivo: `.env`
8. Crear la base de datos en tu sistema gestor de bases de datos: `CREATE DATABASE mexmobile`
9. Configurar nombre de base de datos en _.env_ y ejecutar migraciones con seeders: `php artisan migrate --seed`
10. Ejecutar el comando `php artisan storage:link` para ligar el almacenamiento en Laravel y subir archivos.
11. Registrar el localhost `127.0.0.1 mexmobile.test #laragon magic!` en el archivo `hosts` de Laragon

## Refrescar la BD

1. Eliminamos las migraciones y su contenido: `php artisan migrate:reset`
2. Volvemos a ejecutar las migraciones con los seeders: `php artisan migrate --seed`

## Linkear la carpeta para acceder a los archivos almacenados (imagenes)

`php artisan storage:link`

## Cuentas de usuario:

### Admin:

email: taylorswift@test.com<br>
password: password

### User:

Deber??s entrar a la base de datos con tu gestor de base de datos preferido, ya que los usuarios tipo Cliente se generan de manera aleatoria. Contrase??a por defecto: password

### Resumen de MexMobile:

MexMobile es una tienda de venta de tel??fonos online que posee una interfaz administrativa y otra para clientes en la que pueden administrar los dispositivos que se venden y comprar agregar a sus ordenes respectivamente.

