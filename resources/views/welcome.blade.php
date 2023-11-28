<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full antialiased"
      x-data="tallstackui_darkTheme()"
      x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }" x-cloak>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TallStackUI</title>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:creator" content="@devajmeireles">
    <meta name="twitter:title" content="TallStackUI">
    <meta name="twitter:description" content="TallStackUI: New friendly TALL Stack Component Library">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: New friendly TALL Stack Component Library" />

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" >
    <link rel="icon" ype="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512"  href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="min-h-full flex-col justify-center bg-gray-100 dark:bg-slate-900" x-bind:class="{ 'bg-dots-white' : darkTheme, 'bg-dots-darker' : !darkTheme }">
    <x-release-alert />
    <div class="flex flex-col">
        <div class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <header class="absolute inset-x-0 top-0 z-50">
                    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                        <div class="flex lg:flex-1">
                            <x-svg.banner class="h-8 w-10" />
                        </div>
                        <div class="hidden gap-10 lg:flex lg:flex-1 lg:justify-end">
                            <x-icon x-on:click="darkTheme = false" name="sun" class="h-6 w-6 cursor-pointer text-gray-500" x-show="darkTheme" />
                            <x-icon x-on:click="darkTheme = true" name="moon" class="h-6 w-6 cursor-pointer text-gray-500" x-show="!darkTheme" />
                        </div>
                    </nav>
                </header>
                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-56">
                        <div class="text-center">
                            <x-svg.tallstackui />
                            <div>
                                <p class="text-2xl leading-8 text-gray-700 dark:text-white">
                                    Your new friendly
                                    <span class="relative inline-block">
                                        <span class="z-10 w-full font-semibold">TALL Stack</span>
                                        <span class="absolute bottom-0 left-0 h-1 w-full bg-pink-500"></span>
                                    </span> component library.
                                </p>
                            </div>
                            <div class="mt-10 flex items-center justify-center gap-x-2">
                                <x-button :href="route('documentation.get-started')"
                                          color="pink"
                                          position="right">
                                    Get Started
                                </x-button>
                                <x-button href="https://github.com/tallstackui/tallstackui"
                                          target="_blank"
                                          color="pink"
                                          position="right"
                                          outline>
                                    Source Code
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
