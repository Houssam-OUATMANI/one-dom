<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FOR FLATICON -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">

    <!-- FOR FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">

    <!-- FOR SLICK SLIDER -->
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.min.css') }}">

    <!-- FOR BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

    <!-- FOR GLOBAL STYLE -->
    <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">

    <!-- FOR INDEX PAGE -->
    <link rel="stylesheet" href="{{ asset('css/custom/index.css') }}">

    <!-- JAVASCRIPT FILES -->
    <!-- FOR BOOTSTRAP -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <!-- FOR SLICK SLIDER -->
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/custom/slick.js') }}"></script>

    <!-- FOR COUNTERUP -->
    <script src="{{ asset('js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/custom/counterup.js') }}"></script>

    <!-- FOR INTERACTION -->
    <script src="{{ asset('js/custom/main.js') }}"></script>

       <!-- FOR ALERTS -->

    <title>@yield('title')</title>
      <script src="{{ asset('js/custom/alert.js') }}" defer></script>
</head>

<body>
@include('components.flash')
@yield('body')
</body>

</html>
