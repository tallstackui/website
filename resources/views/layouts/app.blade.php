<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased" x-data="tallstackui_darkTheme({ default: 'dark' })">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TallStackUI, @if ($title) {{ $title }} @endif</title>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:creator" content="@devajmeireles">
    <meta name="twitter:title" content="TallStackUI">
    <meta name="twitter:description" content="TallStackUI: TALL Stack components ready-to-use.">
    <meta name="twitter:image" content="{{ asset('assets/images/og.png') }}">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: TALL Stack components ready-to-use." />
    <meta property="og:image" content="{{ asset('assets/images/og.png') }}" />

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" >
    <link rel="icon" ype="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512"  href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <x-google-analytics />

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-bind:class="{ 'bg-dots-white dark bg-slate-900' : darkTheme, 'bg-dots-darker bg-white' : !darkTheme }"
      x-data="{ mobile : false }"
      x-cloak>
    @persist('docsearch')
        <div id="docsearch" style="display: none !important;"></div>
    @endpersist
    <x-dialog />
    <x-toast />
    <x-top-bar />
    <x-banner wire />
    <x-layout.header />
    <div class="flex flex-col">
        <x-layout.banner />
        <div class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
            <x-layout.sidebar.left />
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <main>
                    @if ($title || $section)
                        <div class="block xl:hidden">
                            <x-on-this-page :$content mobile />
                        </div>
                        <header class="mb-6 space-y-1">
                            @if ($title)
                                <div class="flex items-start gap-x-2">
                                    <h1 class="text-3xl font-semibold tracking-tight text-pink-900 font-display dark:text-slate-300">{{ $title }}</h1>
                                    @if ($version)
                                        <x-badge color="pink" light xs round>
                                            >= {!! $version !!}
                                        </x-badge>
                                    @endif
                                    @if ($ai)
                                        <div class="ml-auto pl-3">
                                            <x-copy-markdown :slug="$ai" />
                                        </div>
                                    @endif
                                </div>
                            @endif
                            @if ($description)
                                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $description }}</p>
                            @endif
                            @if ($personalization || $customization)
                                <div class="mt-2 inline-flex space-x-2">
                                    {{ $personalization ?? $customization }}
                                </div>
                            @endif
                        </header>
                    @endif
                    @if ($current() !== LATEST_VERSION)
                        <div class="mb-6">
                            <x-old-version-warning />
                        </div>
                    @endif
                    {{ $slot }}
                </main>
                @if ($torchlight)
                    <p class="text-sm text-gray-600 dark:text-slate-400">Code highlighting provided by <a href="https://torchlight.dev" class="font-semibold text-pink-700 underline" target="_blank">Torchlight</a></p>
                @endif
            </div>
            @if ($right)
                <x-on-this-page :$content />
            @endif
        </div>
    </div>
    <x-back-to-top color="pink" />
    <script>
        var version = @js($current());
        var algolia_app_id = '{{ config('services.algolia.id', false) }}';
        var algolia_search_key = '{{ config('services.algolia.secret', false) }}';
    </script>
    @livewireScripts
</body>
</html>
