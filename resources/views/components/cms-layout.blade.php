<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LPM Retorika - CMS</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/images/logo/favicon.ico') }}" sizes="any">
    {{-- <link rel="icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/svg+xml"> --}}
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-100">

    <div x-data="{
        sidebarOpen: true,
        mobileSidebarOpen: false
    }" class="flex min-h-screen">

        @include('layouts.cms.sidebar')

        <div class="flex min-w-0 flex-1 flex-col">

            @include('layouts.cms.header')

            <main class="min-w-0 flex-1 overflow-x-hidden overflow-y-auto p-4 sm:p-6">

                {{ $slot }}

            </main>

        </div>

    </div>

</body>

</html>
