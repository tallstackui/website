@props(["title" => "Demo"])

<!DOCTYPE html>
<html
    lang="{{ str_replace("_", "-", app()->getLocale()) }}"
    class="h-full antialiased"
    x-data="tallstackui_darkTheme()"
    x-on:storage.window="
        if (
            $event.key === 'dark-theme' &&
            ['light', 'dark', 'system'].includes($event.newValue)
        )
            mode = $event.newValue
    "
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $title }} · TallStackUI Demo</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <tallstackui:script />
        @livewireStyles
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body
        class="custom-scrollbar min-h-full font-sans antialiased"
        x-bind:class="{ 'dark bg-dark-800': darkTheme, 'bg-white': ! darkTheme }"
        x-cloak
    >
        <x-toast />
        <x-dialog />

        {{ $slot }}

        @livewireScripts
    </body>
</html>
