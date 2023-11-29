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
    <div id="docsearch" class="hidden"></div>
    <div class="flex flex-col">
        <main class="relative mx-auto flex w-full max-w-screen-2xl flex-auto justify-center sm:px-2 lg:px-8 xl:px-12">
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
                <section class="relative isolate px-6 lg:px-8">
                    <div class="mx-auto max-w-4xl pt-28 pb-20">
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
                                          position="right"
                                          lg>
                                    Get Started
                                </x-button>
                                {{-- workaround... --}}
                                <div class="block dark:hidden">
                                    <x-button href="https://github.com/tallstackui/tallstackui"
                                              target="_blank"
                                              color="pink"
                                              position="right"
                                              outline
                                              lg>
                                        Source Code
                                    </x-button>
                                </div>
                                <div class="hidden dark:block">
                                    <x-button href="https://github.com/tallstackui/tallstackui"
                                              target="_blank"
                                              color="white"
                                              position="right"
                                              outline
                                              lg>
                                        Source Code
                                    </x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-transparent">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center">
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-700 dark:text-gray-300 sm:text-4xl">Your idea. Our components.</p>
                            <p class="mt-6 leading-8 text-gray-600 text-md dark:text-gray-400 md:text-lg">Variety of ready-to-use TALL Stack components.</p>
                        </div>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="cloud-arrow-up" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Ready-to-use
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-justify text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">More than 20 ready-to-use components, and more than 10 components are in development.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="wrench" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Easy Installation
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">Components in less than five minutes. A quick installation to save your development time.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="paint-brush" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Full Personalized
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">New and unique customization approaches. You've never seen anything like this before.</p>
                                    </dd>
                                </div>
                            </dl>
                            <x-icon name="arrow-down-circle" class="mx-auto mt-16 h-12 w-12 animate-bounce text-pink-500 dark:text-pink-700" outline />
                        </div>
                    </div>
                </section>
                <section class="mt-16 bg-transparent">
                    <div class="relative isolate overflow-hidden">
                        <div class="mx-auto max-w-7xl pt-10 pb-16 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-40">
                            <div class="px-6 lg:px-0 lg:pt-4">
                                <div class="mx-auto max-w-2xl">
                                    <div class="max-w-lg">
                                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-700 dark:text-white sm:text-6xl">A personalization approach never seen before.</h1>
                                        <p class="mt-6 text-justify text-lg leading-8 text-gray-600 dark:text-gray-400">Enjoy <u class="text-pink-500 font-semibold">soft personalization</u> to customize your components at runtime. In just a few minutes and without technical effort, you can personalize all the TallStackUI components.</p>
                                        <div class="mt-10 flex items-center gap-x-6">
                                            <a href="{{ route('documentation.personalization.soft') }}" class="text-sm font-semibold leading-6 text-gray-700 dark:text-white">Learn more <span aria-hidden="true">→</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0">
                                <div class="shadow-lg md:rounded-3xl">
                                    <x-code :contents="$personalization" :copy="false" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="relative isolate overflow-hidden bg-transparent px-6 pt-16 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <figure>
                            <blockquote class="text-center text-xl font-semibold italic leading-8 text-gray-700 dark:text-gray-300 sm:text-2xl sm:leading-9">
                                <p class="text-center">
                                    “I was tired of relying on component libraries that became abandoned over time. As I have SaaS based on TALL Stack I decided to create TallStackUI so that I can consume it myself, this is my motivation to maintain the library.”
                                </p>
                            </blockquote>
                            <figcaption class="mt-10">
                                <div class="mt-4 flex items-center justify-center text-xl space-x-3">
                                    <a class="font-semibold text-pink-500" href="https://github.com/devajmeireles" target="_blank">AJ Meireles,</a>
                                    <div class="text-gray-600 dark:text-gray-400">Creator of TallStackUI.</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>
        </main>
        <footer class="bg-transparent">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <x-github />
                </div>
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-500 dark:text-gray-300">&copy; {{ now()->year }}, TallStackUI. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>
</html>
