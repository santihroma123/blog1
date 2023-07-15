<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Como correr la aplicacion

El proyecto está hecho con laravel sail, gracias a esto es mas facil hacer contenedores con la web y la base de datos

## Pasos para Iniciar la web.

El proyecto está hecho con laravel sail, gracias a esto es mas facil hacer contenedores con la web y la base de datos

### Instalar dependencias

```bash
composer install
npm install
```

### Levantar contenedor de sailor

```bash
./vendor/bin/sail up -d
```

### Correr migraciones

```bash
./vendor/bin/sail artisan migrate
```

### Correr migraciones desde cero

```bash
./vendor/bin/sail artisan migrate:fresh
```
