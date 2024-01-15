@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center ms_template">
        <div class="d-flex justify-content-start card ms_card">
            <div class="d-flex gap-4 justify-content-center mb-4">
                <a href="https://laravel.com/" target="_blank"> <img src="{{ asset('svg/laravel-svgrepo-com.svg') }}"
                        alt=""></a>
                <img src="{{ asset('svg/plus-large-svgrepo-com.svg') }}" alt="">
                <a href="https://vitejs.dev/" target="_blank"><img src="{{ asset('svg/vite-svgrepo-com.svg') }}"
                        alt=""></a>
                <img src="{{ asset('svg/plus-large-svgrepo-com.svg') }}" alt="">
                <img src="{{ asset('svg/cat-with-wry-smile-svgrepo-com.svg') }}" alt="">
            </div>
            <div>
                <div class="mb-4">
                    <p class="ms_red">Welcome to my personal laravel template</p>
                    <p>This is my Laravel Vite template. Enjoy it.</p>
                </div>
                <div class="mb-4">
                    <a href="https://laravel.com/docs/10.x/installation#your-first-laravel-project" target="_blank">
                        <p class="ms_red"">Artisan Serve</p>
                    </a>
                    <p>Laravel's local development server powered by PHP's built-in web server.</p>
                </div>
                <div class="mb-3">
                    <a href="https://laravel.com/docs/10.x/sail" target="_blank">
                        <p class="ms_red"">Welcome to my personal laravel template</p>
                    </a>
                    <p>A light-weight command-line interface for interacting with Laravel's default Docker development
                        environment.</p>
                </div>
            </div>
            <hr>
            <div class="mt-3 mb-4">
                <p>Your Laravel application's configured <span>APP_URL</span> is:</p>
                <a href="http://localhost" target="_blank" class="ms_red">http://localhost </a>
            </div>
            <div>
                <p>Want more information on Laravel's Vite integration?</p>
                <a href="https://laravel.com/docs/10.x/vite" target="_blank" class="ms_red">Read the docs &rarr;</a>
            </div>
        </div>
    </div>
@endsection
