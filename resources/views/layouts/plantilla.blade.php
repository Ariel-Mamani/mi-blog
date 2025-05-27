<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Mi Blog')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- header -->
    <!-- nav -->
    @include('layouts.partials.header')

    <div class="container mx-auto p-10 bg-slate-400 w-full">
        @yield('content')
    </div>

    <!-- footer -->
    @include('layouts.partials.footer')
</body>
</html>