<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        @include('fonts')
        @include('styles-scripts')
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#fafafa] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        {{-- HEADER --}}
        @yield('header')

        {{-- MAIN --}}
        @yield('main')

        {{-- FOOTER --}}
        @yield('footer')
    </body>
</html>
