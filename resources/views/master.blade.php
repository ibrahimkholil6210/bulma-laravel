<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') || Job portal</title>

        @include('partials.style')
    </head>
    <body>
        @include('partials.navigation')
        @yield('content')
        @include('partials.footer')
    </body>
</html>
