<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HTML Roadmap')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/chapters') }}">Chapters</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') 
    </main>

    <footer class="footer">
        <p>&copy; 2024 HTML Roadmap. All rights reserved.</p>
    </footer>
</body>
</html>
