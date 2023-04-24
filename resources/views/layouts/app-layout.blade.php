<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GENERAL STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- LOGIN STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" image="/x-icon">

    <script src="{{ asset('js/app.js') }}"></script>

    <title>{{ $title }}</title>

</head>

<body class="body">

    <x-nav-bar />

    {{ $slot }}

    <x-footer />

</body>

</html>
