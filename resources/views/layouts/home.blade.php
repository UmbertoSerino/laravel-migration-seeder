<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Trenito')</title>
    @vite('resources/js/app.js')
    @yield('head-content')

</head>
<body>
    @include('partials.header')
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')
</body>
@yield('script-content')
</html>