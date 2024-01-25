<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body>
        {{ $slot }}

        <!-- Scripts -->
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script>
            Fancybox.bind('[data-fancybox="gallery-1"]', {});
            Fancybox.bind('[data-fancybox="gallery-2"]', {});
        </script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
