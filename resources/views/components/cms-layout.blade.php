<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LPM Retorika - CMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-100">

    <div x-data="{
        sidebarOpen: true,
        mobileSidebarOpen: false
    }" class="flex h-screen">

        @include('layouts.cms.sidebar')

        <div class="flex flex-1 flex-col overflow-hidden">

            @include('layouts.cms.header')

            <main class="flex-1 overflow-y-auto p-6">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>

</html>
