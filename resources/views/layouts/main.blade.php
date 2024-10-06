<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- app -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CSS exclusivo da página -->
    @yield('css')

    <!-- Css empilhados serão inseridos aqui -->
    @stack('css')
</head>

<body class="font-sans antialiased bg-gray-100 text-gray-900">
    <!-- Navbar -->
    {{--@include('components.navbar')--}}

    <!-- Navbar Mobile -->
    @include('components.navbar-mobile')

    <!-- Conteúdo da página -->
    @yield('content')

    <!-- Footer -->
    @include('components.footer')

    <!-- app -->
    <script src="{{ asset('js/app.js') }}" defer ></script>

    <!-- Alpinejs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Scripts exclusivos da página -->
    @yield('scripts')

    <!-- Scripts empilhados serão inseridos aqui -->
    @stack('scripts')
</body>

</html>