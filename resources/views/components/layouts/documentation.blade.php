@props(['header' => null])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full" x-data="{ mobile : false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style> [x-cloak] {
            display: none !important;
        } </style>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @tasteUiStyles
    @tasteUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-dark">
<div class="flex min-h-full flex-col">
    <header class="sticky shrink-0 border-b border-dark-800 bg-dark-800">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <div class="flex items-center gap-x-8">
                <button type="button" class="text-gray-400 -m-2.5 p-2.5 hover:text-gray-300">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your profile</span>
                    <img class="h-8 w-8 rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </a>
            </div>
        </div>
    </header>

    <div class="mx-auto flex w-full max-w-screen-2xl items-start gap-x-4 px-4 py-10 sm:px-6 lg:px-8">
        <aside class="sticky top-8 hidden rounded p-4 xl:max-w-[240px] xl:block xl:w-full overflow-y-auto h-[calc(100vh-8rem)] custom-scrollbar">
            <!-- left -->
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
        </aside>

        <main class="flex-1">
            <div class="rounded-md p-4 bg-dark-800">
                <!-- main -->
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam

            </div>
        </main>

        <aside class="sticky top-8 hidden rounded p-4 bg-dark-800 xl:max-w-[240px] xl:block xl:w-full">
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet
        </aside>
    </div>
</div>
</body>
</html>
