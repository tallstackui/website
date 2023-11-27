<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full antialiased"
      x-data="tallstackui_darkTheme()"
      x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TallStackUI, @if ($title) {{ $title }} @endif</title>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:creator" content="@devajmeireles">
    <meta name="twitter:title" content="TallStackUI">
    <meta name="twitter:description" content="TallStackUI: New friendly TALL Stack Component Library">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: New friendly TALL Stack Component Library" />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="min-h-full flex-col justify-center bg-gray-100 dark:bg-slate-900" x-bind:class="{ 'bg-dots-white' : darkTheme, 'bg-dots-darker' : !darkTheme }" x-data="{ mobile : false }" x-cloak>
    <x-dialog />
    <x-toast />
    <x-top-bar>
        <a href="https://github.com/tallstackui/tallstackui/releases" target="_blank" class="underline decoration-dotted underline-offset-4">TallStackUI 1.0 is here! 🎉</a>
    </x-top-bar>
    <x-layout.header />
    <div class="flex flex-col">
        <x-layout.banner />
        <div class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
            <x-layout.sidebar.left />
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <article>
                    @if ($title || $section)
                        <header class="mb-6 space-y-1">
                            @if ($section)
                                <p class="text-sm font-medium text-pink-500 font-display">{{ $section }}</p>
                            @endif
                            @if ($title)
                                <h1 class="text-3xl font-semibold tracking-tight text-pink-900 font-display dark:text-slate-300">{{ $title }}</h1>
                            @endif
                            @if ($description)
                                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $description }}</p>
                            @endif
                            @if ($personalization)
                                <div class="mt-2 inline-flex space-x-2">
                                    {!! $personalization !!}
                                </div>
                            @endif
                        </header>
                    @endif
                    {{ $slot }}
                </article>
                @if ($navigation)
                    <dl class="mt-12 flex border-t border-slate-200 pt-6 dark:border-slate-800">
                        @if ($back)
                            <div>
                                <dt class="text-sm font-medium text-pink-700 font-display dark:text-white">Previous</dt>
                                <dd class="mt-1">
                                    {{ $back }}
                                </dd>
                            </div>
                        @endif
                        @if ($next)
                            <div class="ml-auto text-right">
                                <dt class="text-sm font-medium text-pink-700 font-display dark:text-white">Next</dt>
                                <dd class="mt-1">
                                    {{ $next }}
                                </dd>
                            </div>
                        @endif
                    </dl>
                @endif
                @if ($torchlight)
                    <p @class(['text-sm text-gray-600 dark:text-slate-400', 'mt-4' => $navigation !== null])>Code highlighting provided by <a href="https://torchlight.dev" class="font-semibold text-pink-700 underline" target="_blank">Torchlight</a></p>
                @endif
            </div>
            @if ($right)
                <x-on-this-page />
            @endif
        </div>
    </div>
    @livewireScripts
</body>
</html>
