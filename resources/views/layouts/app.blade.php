<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @include('layouts.head')
</head>
<body style="background-image: url('{{ asset('assets/images/logo/portada.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div id="app">
        

        <main class="py-4 bg-transparent">
            @yield('content')
        </main>
    </div>

    <!-- JAVASCRIPT -->
    @include('layouts.footer-script')
</body>
</html>