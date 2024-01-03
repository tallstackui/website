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
    <meta name="twitter:image" content="{{ asset('assets/images/og.png') }}">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: New friendly TALL Stack Component Library" />
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
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="min-h-full flex-col justify-center bg-gray-100 dark:bg-slate-900" x-bind:class="{ 'bg-dots-white' : darkTheme, 'bg-dots-darker' : !darkTheme }">
    <x-top-bar />
    <x-toast />
    <x-dialog />
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
                <section class="relative isolate bg-transparent">
                    <div class="relative">
                        <div class="relative pb-16">
                            <main class="mt-16 sm:mt-24">
                                <div class="mx-auto max-w-7xl">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                                        <div class="px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                                            <div>
                                                <div class="hidden sm:mb-4 sm:flex sm:justify-center lg:justify-start">
                                                    <x-button href="https://discord.gg/sfr66WXh4A"
                                                              target="_blank"
                                                              sm
                                                              round
                                                              color="pink"
                                                              icon="arrow-up-right"
                                                              position="right">
                                                        Join us on Discord server for help and early updates!
                                                    </x-button>
                                                </div>
                                                <h1 class="text-4xl font-bold tracking-tight text-pink-900 dark:text-white sm:text-5xl md:text-6xl">
                                                    Turbocharge your experience with ready-to-use <i>TALL Stack</i> components.
                                                </h1>
                                                <p class="mt-3 text-base text-gray-700 font-base sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                                    TallStackUI is a powerful
                                                    <span class="relative inline-block">
                                                        <span class="absolute bottom-0 left-0 -z-50 h-1 w-full bg-pink-500"></span>
                                                        <span class="z-50 w-full font-semibold">suite of 30+ Blade components</span>
                                                    </span> that elevate your workflow of <i>Livewire</i> applications.
                                                </p>
                                                <div class="mt-4 flex items-center gap-x-2">
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
                                        <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0">
                                            <livewire:welcome.header-form />
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </section>
                <section class="mt-10 bg-transparent">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center">
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-700 dark:text-gray-300 sm:text-4xl">
                                What makes the difference:
                            </p>
                        </div>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="cloud-arrow-up" class="h-6 w-6 text-pink-500 dark:text-gray-300" />
                                        Ready-to-use
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">More than 30 ready-to-use components, and more than 10 components are in development.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="wrench" class="h-6 w-6 text-pink-500 dark:text-gray-300" />
                                        Easy Installation
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">Components in less than five minutes. A quick installation to save your development time.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="paint-brush" class="h-6 w-6 text-pink-500 dark:text-gray-300" />
                                        Full Personalized
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">New and unique customization approaches. You've never seen anything like this before.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg font-semibold uppercase leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="wrench-screwdriver" class="h-6 w-6 text-pink-500 dark:text-gray-300" />
                                        Continuous Updates
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">We are always working to improve the library. New components and features are always being added.</p>
                                    </dd>
                                </div>
                            </dl>
                            <x-icon name="arrow-down-circle" class="mx-auto mt-16 h-12 w-12 animate-bounce text-pink-500 dark:text-pink-700" outline />
                        </div>
                    </div>
                </section>
                <section class="mt-10 bg-transparent">
                    <div class="relative isolate overflow-hidden">
                        <div class="mx-auto max-w-7xl pt-10 pb-16 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                            <div class="px-6 lg:px-0 lg:pt-4">
                                <div class="mx-auto max-w-2xl">
                                    <div class="max-w-lg">
                                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-700 dark:text-white sm:text-6xl">A personalization approach never seen before.</h1>
                                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Enjoy <u class="font-semibold text-pink-500">soft personalization</u> to customize your components at runtime. In just a few minutes and without technical effort, you can personalize all the TallStackUI components.</p>
                                        <div class="mt-10 flex items-center gap-x-6">
                                            <a href="{{ route('documentation.personalization.soft') }}" class="text-sm font-semibold leading-6 text-gray-700 dark:text-white">Learn more <span aria-hidden="true">→</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0">
                                <div class="shadow-lg md:rounded-3xl">
                                    <x-code :contents="$personalization" disable-copy />
                                </div>
                            </div>
                        </div>
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
