<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Folleto de Negocio - NIKKEN Latinoamérica</title>

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
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Estilos -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-P2CFE2S8V7"></script>

        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-P2CFE2S8V7');
        </script>
    </head>

    <body>
        <!-- Contenido -->
        @yield('content')
        <!-- Contenido -->

        <!-- Scripts -->
        @stack('scripts')
        <!-- Scripts -->
    </body>
</html>
