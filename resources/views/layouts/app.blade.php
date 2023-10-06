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

    @tasteUiStyles
    @tasteUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex-col justify-center bg-white dark:bg-slate-900">
    <x-layout.header />
    <div class="flex flex-col">
        <x-layout.banner />
        <div class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
            <x-layout.sidebar.left />
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <article>
                    @if ($title || $section)
                        <header class="mb-9 space-y-1">
                            @if ($section)
                                <p class="text-sm font-medium text-sky-500 font-display">{{ $section }}</p>
                            @endif
                            @if ($title)
                                <h1 class="text-3xl tracking-tight text-slate-900 font-display dark:text-white">{{ $title }}</h1>
                            @endif
                        </header>
                    @endif
                    {{ $slot }}
                </article>
            </div>
            <x-layout.sidebar.right />
        </div>
    </div>
    @livewireScripts
</body>
</html>
