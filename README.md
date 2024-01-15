<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Clone the New Repository Locally and Follow These Steps:

1. Open your terminal and run the following commands:
    ```bash
    composer install
    ```

2. Still in the terminal, run:
    ```bash
    npm install
    ```

3. Copy the `.env.example` file to create a new file named `.env`. Use the following command in the terminal:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key by running the following command in the terminal:
    ```bash
    php artisan key:generate
    ```

5. Open two separate terminals and run the following commands in each:

    Terminal 1:
    ```bash
    php artisan serve
    ```

    Terminal 2:
    ```bash
    npm run dev
    ```

Make sure to keep these two commands running throughout the development phase. Verify that everything is working correctly and that you can view the project page without any issues.

