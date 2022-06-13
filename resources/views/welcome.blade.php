<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GameStar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/homestart.css') }}" rel="stylesheet">
</head>
    <body>
    <div id="home">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
            <a class="navbar-brand ps-1">
                <img src="{{ URL('images/brand.png') }}" alt="brand-nav">
                </a>
            <ul class="navbar-nav ms-auto">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-8 py-2 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500">Home</a>
                    @else
                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        @endif
                    @endauth
                </div>
            @endif

         
        </div>
    </div>

        <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>

    </body>
</html>
