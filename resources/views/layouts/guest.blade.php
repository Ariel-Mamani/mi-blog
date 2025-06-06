<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" text-gray-900 antialiased">
    <div class="w-full max-w-lg mx-auto min-h-screen  flex flex-col sm:justify-center items-center p-6 sm:pt-0 bg-russian_violet rounded-lg mt-5">
        <div class="mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <a href="/">
                <img src="{{ asset('img/logoTP3.png') }}" alt="Logo" class="mx-auto h-20">
            </a>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>