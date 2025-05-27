<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'KASAU') }}</title> --}}
    <title>@yield('title', 'Kasau Group')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/kasau/logo/logo.svg') }}" class="scale-150" type="image/x-icon">

    <!-- Scripts and Styles -->
    {{-- Dengan ini --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-3634cf44.css') }}">
    <script src="{{ asset('build/assets/app-a89463d6.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        @yield('content')
    </div>
</body>
</html>