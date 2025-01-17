<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-cloak=""
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
      :class="darkMode ? 'dark' : ''" x-bind:data-theme="darkMode ? 'dark' : ''">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

{{--  Font-awesome  --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased soft-scrollbar">
{{--<x-banner/>--}}

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
{{--    @livewire('navigation-menu')--}}

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="w-11/12 md:w-10/12 mx-auto py-4">
                <x-header-app></x-header-app>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@stack('modals')

@wireUiScripts
@livewireScripts

</body>
</html>
