<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" text-gray-900 antialiased relative">
    <div class="min-h-screen bg-[#eeeeee]">
        <div class="w-full flex justify-between">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
