<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon.css')}}">

    </head>
    <body>
    <nav class="navbar-part">
        <div class="container">
            <div class="navbar-content">
                <a class="navbar-logo" href="{{route('home')}}"><img src="{{asset('images/onedom.png')}}" alt="logo"></a>
                <button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>

                <div class="navbar-slide">
                    <a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>

                    <ul class="navbar-list">
                        <li class="navbar-item active"><a class="navbar-link" href="/accueil">Acceuil</a></li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link dropdown-indicator" href="#my_services">
                                <span>Services</span>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link dropdown-indicator" href="#about_us">
                                <span>A propos</span>
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>

                    </ul>

                    <div class="navbar-btn">
                        <a class="btn btn-inline" href="#contact_us">
                            <i class="fas fa-user"></i>
                            <span>Contactez nous</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
            @yield('body')
    </body>
</html>
