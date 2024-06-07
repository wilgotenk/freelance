<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        @include('includes.landing.meta')

        <title>@yield('title') | Kerja.in</title>

        @stack('before-style')

        @include('includes.landing.style')

        @stack('after-style')

    </head>
    <body class="antialiased">
        <div class="relative">

            @include('includes.landing.header')

                @include('sweetalert::alert')

                @yield('content')

        </div>
    </body>
</html>