<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- 🌐 Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">My Laravel App</div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Welcome</a></li>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- 📄 Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- 👣 Footer -->
    <footer>
        <p>&copy; 2025 My Laravel App | Built with ❤️ using Laravel</p>
    </footer>
</body>
</html>
