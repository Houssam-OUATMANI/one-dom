<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'],)

    <title>@yield('title')</title>
    <script src="{{ asset('js/custom/alert.js') }}" defer></script>
</head>

<body data-bs-theme="dark">

@auth()
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
@endauth

@include('components.flash')
@yield('body')
</body>
</html>
