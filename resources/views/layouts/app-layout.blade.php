<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- GENERAL STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }}</title>

</head>

<body class="body">

    <x-nav-bar />

    {{ $slot }}

    <x-footer />

</body>

</html>