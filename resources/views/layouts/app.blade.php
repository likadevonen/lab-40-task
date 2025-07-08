<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('generic.title')
        @include('generic.fonts')
        @include('generic.styles-scripts')
    </head>
    <body>
        {{-- HEADER --}}
        @yield('header')

        {{-- MAIN --}}
        @yield('main')

        {{-- FOOTER --}}
        @yield('footer')
    </body>
</html>
