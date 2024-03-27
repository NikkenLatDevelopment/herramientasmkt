<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cafecito Financiero - NIKKEN Latinoamérica</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#00aba9">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-config" content="{{ asset('assets/img/favicon/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Estilos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        @vite(['resources/sass/financial-coffee.scss', 'resources/js/financial-coffee.js'])
        <!-- Estilos -->
    </head>

    <body>
        <!-- Contenido -->
        @yield('content')
        <!-- Contenido -->

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>

        @stack('scripts')
        <!-- Scripts -->
    </body>
</html>
