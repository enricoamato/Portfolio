<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Add tab title -->
    @yield('title')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("css/book.css") }}">
</head>

<body class="gradient">
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>