<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="Website Test Task">

        <title>{{ config('app.name') }}@hasSection('title'): @yield('title')@endif</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Vite -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    </head>
    <body>


        {{-- Header --}}
        @includeIf('layout.header')

        {{-- Notification --}}
        @includeIf('components.notifications')

        {{-- Pages --}}
        @yield('content')

        {{-- Footer --}}
        @includeIf('layout.footer')
    </body>

</html>
