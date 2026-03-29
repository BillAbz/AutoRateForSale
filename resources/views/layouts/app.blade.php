<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'AutoRateForSale' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrapper">
            <a href="{{ route('home') }}" class="logo">AutoRateForSale</a>

            <nav class="nav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('cars') }}" class="{{ request()->routeIs('cars') || request()->routeIs('cars.*') ? 'active' : '' }}">Cars</a>
                <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') || request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container page-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} AutoRateForSale. All rights reserved.</p>
            <p>Designed and developed by <a href="https://github.com/BillAbz" target="_blank">Bilal Abazaoglu</a>.</p>
        </div>
    </footer>
</body>
</html>