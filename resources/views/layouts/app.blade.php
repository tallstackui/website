<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full antialiased"
      x-data="{ mobile : false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <tallstackui:setup />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex-col justify-center bg-gray-100 dark:bg-slate-900" x-cloak>
    <x-dialog />
    <x-toast />
    <x-layout.header />
    <div class="flex flex-col">
        <x-layout.banner />
        <div class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
            <x-layout.sidebar.left />
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <x-beta-warning />
                <article>
                    @if ($title || $section)
                        <header class="mb-6 space-y-1">
                            @if ($section)
                                <p class="text-sm font-medium text-sky-500 font-display">{{ $section }}</p>
                            @endif
                            @if ($title)
                                <h1 class="text-3xl font-semibold tracking-tight text-slate-900 font-display dark:text-white">{{ $title }}</h1>
                            @endif
                            @if ($description)
                                <p class="text-sm text-slate-500">{{ $description }}</p>
                            @endif
                        </header>
                    @endif
                    {{ $slot }}
                </article>
                @if (request()->routeIs('documentation.*'))
                    <p class="text-sm text-gray-600">Code highlighting provided by <a href="https://torchlight.dev" class="font-semibold underline" target="_blank">Torchlight</a></p>
                @endif
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
