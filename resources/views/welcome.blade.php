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
                    <div class="relative overflow-hidden">
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
                                        {{--Form--}}
                                        <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0">
                                            <div class="bg-white sm:mx-auto sm:w-full sm:max-w-2xl sm:overflow-hidden sm:rounded-lg">
                                                <div class="px-6 py-8 sm:px-10">
                                                    <div>
                                                        <p class="text-sm font-medium text-gray-700">Sign in with</p>

                                                        <div class="mt-1 grid grid-cols-3 gap-3">
                                                            <div>
                                                                <a href="#" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                                                    <span class="sr-only">Sign in with Facebook</span>
                                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                                                    <span class="sr-only">Sign in with Twitter</span>
                                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                                    </svg>
                                                                </a>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                                                                    <span class="sr-only">Sign in with GitHub</span>
                                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="relative mt-6">
                                                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                                            <div class="w-full border-t border-gray-300"></div>
                                                        </div>
                                                        <div class="relative flex justify-center text-sm">
                                                            <span class="bg-white px-2 text-gray-500">Or</span>
                                                        </div>
                                                    </div>

                                                    <div class="mt-6">
                                                        <form action="#" method="POST" class="space-y-6">
                                                            <div>
                                                                <label for="name" class="sr-only">Full name</label>
                                                                <input type="text" name="name" id="name" autocomplete="name" placeholder="Full name" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div>
                                                                <label for="mobile-or-email" class="sr-only">Mobile number or email</label>
                                                                <input type="text" name="mobile-or-email" id="mobile-or-email" autocomplete="email" placeholder="Mobile number or email" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div>
                                                                <label for="password" class="sr-only">Password</label>
                                                                <input id="password" name="password" type="password" placeholder="Password" autocomplete="current-password" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div>
                                                                <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create your account</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="border-t-2 border-gray-200 bg-gray-50 px-6 py-6 sm:px-10">
                                                    <p class="text-xs leading-5 text-gray-500">By signing up, you agree to our <a href="#" class="font-medium text-gray-900 hover:underline">Terms</a>, <a href="#" class="font-medium text-gray-900 hover:underline">Data Policy</a> and <a href="#" class="font-medium text-gray-900 hover:underline">Cookies Policy</a>.</p>
                                                </div>
                                            </div>
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
