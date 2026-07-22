<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ 'LPM Retorika' ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <x-header />

    <x-navbar />

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>
