<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased" x-data="tallstackui_darkTheme({ default: 'dark' })">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TallStackUI: Beautifully crafted components for your next TALL Stack idea</title>

    <meta name="description" content="TallStackUI gives you 80+ Blade components for Laravel, Livewire, Alpine.js, and Tailwind CSS. Free, open source, and ready to use.">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:creator" content="@devajmeireles">
    <meta name="twitter:title" content="TallStackUI">
    <meta name="twitter:description" content="TallStackUI: TALL Stack components ready-to-use.">
    <meta name="twitter:image" content="{{ asset('assets/images/og.png') }}">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: Beautifully crafted components for your next TALL Stack idea" />
    <meta property="og:image" content="{{ asset('assets/images/og.png') }}" />

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" >
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700|outfit:400,500,600,700|instrument-serif:400,400i|jetbrains-mono:400,500,600&display=swap" rel="stylesheet"/>
    <x-google-analytics />

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="landing min-h-full"
      x-bind:class="{ 'dark' : darkTheme }"
      x-cloak>
    <x-toast />
    <x-dialog />
    @persist('docsearch')
        <div id="docsearch" style="display: none !important;"></div>
    @endpersist

    <div class="landing-shell">
        <div class="landing-noise"></div>

        <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
            @include('landing.nav')
            @include('landing.hero')
        </div>

        @include('landing.ticker')

        <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
            @include('landing.headliners')
            @include('landing.theme')
            @include('landing.showcase')
            @include('landing.customization')
            @include('landing.everywhere')
            @include('landing.ai')
            @include('landing.numbers')
            @include('landing.sponsors')
            @include('landing.cta')
            @include('landing.footer')
        </div>
    </div>

    <x-back-to-top color="pink" />

    <script>
        var version = @js($version);
        var algolia_app_id = '{{ config('services.algolia.id', false) }}';
        var algolia_search_key = '{{ config('services.algolia.secret', false) }}';
    </script>
    @livewireScripts
</body>
</html>
