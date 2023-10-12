<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="sproutwings is real time gps tracking system in all over india. Our products are personal tracker, asset tracker, vechicle tracker, personal tracker, fleet tracker etc.." name="description" />
        <meta content="Sproutwings" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

        @include('layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>
