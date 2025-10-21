<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>
    @include('layouts.navigation')

    <!-- This is where each page's content appears -->
    <main>
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // animation duration (1 second)
        once: true,     // animation happens once per scroll
    });
   </script>
   </body>
</html>
