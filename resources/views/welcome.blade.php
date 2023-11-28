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
                    <div class="mx-auto max-w-4xl pt-52 pb-44">
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
                                <x-button href="https://github.com/tallstackui/tallstackui"
                                          target="_blank"
                                          color="pink"
                                          position="right"
                                          outline
                                          lg>
                                    Source Code
                                </x-button>
                            </div>
                        </div>
                        <x-icon name="arrow-down-circle" class="mx-auto mt-16 h-12 w-12 animate-bounce text-pink-500 dark:text-pink-700" outline />
                    </div>
                </div>
                <div class="bg-transparent">
                    <div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20">
                        <div class="mx-auto max-w-7xl pb-24 pt-10 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-40">
                            <div class="px-6 lg:px-0 lg:pt-4">
                                <div class="mx-auto max-w-2xl">
                                    <div class="max-w-lg">
                                        <img class="h-11" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                                        <div class="mt-24 sm:mt-32 lg:mt-16">
                                            <a href="#" class="inline-flex space-x-6">
                                                <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-600/10">What's new</span>
                                                <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600">
                                                  <span>Just shipped v0.1.0</span>
                                                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                  </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Supercharge your web applications</h1>
                                        <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                                        <div class="mt-10 flex items-center gap-x-6">
                                            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Documentation</a>
                                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">View on GitHub <span aria-hidden="true">→</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0 lg:w-screen">
                                <div class="shadow-lg md:rounded-3xl">
                                    <x-code :contents="$test" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-transparent mt-12">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:text-center">
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-700 dark:text-gray-300 sm:text-4xl">Your application. Our components.</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Variety of TALL Stack components ready to use with little effort.</p>
                        </div>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg uppercase font-semibold leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="cloud-arrow-up" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Ready-to-use
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">More than 20 ready-to-use components.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg uppercase font-semibold leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="wrench" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Easy Installation
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">Your first components in less than five minutes.</p>
                                    </dd>
                                </div>
                                <div class="flex flex-col">
                                    <dt class="flex items-center gap-x-3 text-lg uppercase font-semibold leading-7 text-gray-700 dark:text-pink-500">
                                        <x-icon name="paint-brush" class="h-6 w-6 text-pink-500 dark:text-gray-400" />
                                        Soft Personalized
                                    </dt>
                                    <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600 dark:text-gray-400">
                                        <p class="flex-auto">New and exclusive personalization approaches.</p>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <section class="relative isolate overflow-hidden bg-transparent px-6 pt-48 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <figure class="mt-10">
                            <blockquote class="text-center text-xl italic font-semibold leading-8 text-gray-900 dark:text-gray-300 sm:text-2xl sm:leading-9">
                                <p class="text-center">
                                    “I was tired of relying on component libraries that became abandoned over time. As I have SaaS based on TALL Stack I decided to create TallStackUI so that I can consume it myself, this is my motivation to maintain the library.”
                                </p>
                            </blockquote>
                            <figcaption class="mt-10">
                                <div class="mt-4 flex items-center justify-center space-x-3 text-xl">
                                    <a class="font-semibold text-gray-900 dark:text-pink-500" href="https://github.com/devajmeireles" target="_blank">AJ Meireles,</a>
                                    <div class="text-gray-600 dark:text-gray-400">Creator of TallStackUI.</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </section>
            </div>
        </div>
        <footer class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>
</html>
