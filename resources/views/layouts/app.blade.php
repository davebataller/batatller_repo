<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio - Baruela Ronhelyn G</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="nav-content">
                <a href="/" class="nav-logo">Portfolio</a>
                <div class="nav-links">
                    <a href="#about">About</a>
                    <a href="#education">Education</a>
                    <a href="#projects">Projects</a>
                    <a href="#github">GitHub</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <p>&copy; 2026 Baruela Ronhelyn G. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>