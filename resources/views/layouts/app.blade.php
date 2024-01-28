<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prala</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
</head>
<body class="font-light scroll-smooth">
<div class="relative flex h-min">
    <div class="w-full lg:w-3/4 bg-pr-beige md:bg-pr-blue-sky p-5">

        <!-- Header -->
        @include('parts.header')

        <!-- Main -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Sidebar -->
    @include('parts.sidebar')
</div>
</body>
</html>
