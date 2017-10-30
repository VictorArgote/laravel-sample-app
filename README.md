# Laravel Sample App

This a sample app uses Laravel 5.5 and Bootstrap 4.0.0-beta for the primary application template. It is based on: https://github.com/gomezcabo/laravel-boostrap-starter. This app allows to send emails using external service providers and connects to two separate databases.

## Installation

* Install Composer and Yarn dependencies

```bash
composer install
yarn install
```

* Generate laravel key

```bash
php artisan key:generate
```


* Run it!

```bash
php artisan serve
```

* Copy .env.example to .env and change default settings

```bash
cp .env.example .env
nano .env
```