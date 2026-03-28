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
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('cars') }}">Cars</a>
                <a href="{{ route('projects') }}">Projects</a>
                <a href="{{ route('contact') }}">Contact</a>
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