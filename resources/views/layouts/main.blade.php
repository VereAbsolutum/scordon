<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <!---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- app -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- style -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- CSS exclusivo da página -->
    @yield('css')

    <!-- Css empilhados serão inseridos aqui -->
    @stack('css')


</head>

@php
$navItems = [
    [
        'links' => [
            ['text' => 'Visite nosso Site', 'url' => '#'],
            ['text' => 'Suporte e Ajuda', 'url' => '#'],
        ],
    ],
    [
        'links' => [
            ['text' => 'A Nossa Jornada', 'url' => '#'],
        ],
    ],
    [
        'links' => [
            ['text' => 'Entre em Contato', 'url' => '#'],
            ['text' => 'Onde Estamos', 'url' => '#'],
        ],
    ],
];
@endphp

@php
$footerItems = [
    [
        'title' => 'Serviços',
        'links' => [
            ['link' => '/marca', 'text' => 'Marca'],
            ['link' => '/design', 'text' => 'Design'],
            ['link' => '/marketing', 'text' => 'Marketing'],
            ['link' => '/publicidade', 'text' => 'Publicidade'],
        ],
    ],
    [
        'title' => 'Empresa',
        'links' => [
            ['link' => '/sobre-nos', 'text' => 'Sobre nós'],
            ['link' => '/contato', 'text' => 'Contato'],
        ],
    ],
    [
        'title' => 'Legal',
        'links' => [
            ['link' => '/termos-de-uso', 'text' => 'Termos de uso'],
            ['link' => '/privacidade', 'text' => 'Privacidade'],
            ['link' => '/politica-de-cookies', 'text' => 'Política de Cookies'],
        ],
    ],
];
@endphp


<body  class="font-sans antialiased bg-primary-100 bg-opacity-0 text-black text-body">
    <!-- Navbar -->
    <x-organisms.navbar :navItems="$navItems" />

    <!-- Conteúdo da página -->
    @yield('content')

    <!-- Footer -->
    <x-tw.layouts.footer :footerItems="$footerItems"/>

    <!-- app -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Alpinejs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Scripts exclusivos da página -->
    @yield('scripts')

    <!-- Scripts empilhados serão inseridos aqui -->
    @stack('scripts')
</body>

</html>