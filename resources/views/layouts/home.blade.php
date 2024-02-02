<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Trenito')</title>
    @vite('resources/js/app.js')
    @yield('head-content')

</head>
    @include('partials.header')
<body>
    <main>
        Layouts.Home
        @yield('main-content')
    </main>
</body>
    @include('partials.footer')
@yield('script-content')
</html>