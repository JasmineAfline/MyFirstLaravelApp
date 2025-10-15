<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="flex justify-center space-x-6 mt-4">
    <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
    <a href="/blog" class="text-gray-700 hover:text-blue-600">Blog</a>
</nav>


    <header class="p-6 bg-white shadow-md">
        <h1 class="text-2xl font-semibold text-center text-blue-700">My Laravel App</h1>
    </header>

    <main class="container mx-auto py-10">
        @yield('content')
    </main>

</body>
</html>
