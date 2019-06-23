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
    {{-- <link rel="stylesheet" href="{{ asset("../../../../node_modules/bootswatch/dist/materia/_variables.scss") }}"> --}}
    {{-- <link rel="stylesheet" href="{{  }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset("../../../../node_modules/bootswatch/dist/materia/_bootswatch.scss") }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @yield('content')
    @yield('navbar')
    <p>{{$theme}} has been loaded</p>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
