@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Dark Theme helper
    </x-slot:title>
    <x-slot:description>
        Helper to easily manage dark theme.
    </x-slot:description>
    <x-section disable-copy>
        <p class="mb-2">
            TallStackUI provides a simple yet powerful helper to add dark theme support to your application. The main idea
            of this helper is to offer an easy way to control the dark theme by persisting a value in the browser's local storage.
            After applying the helper, an AlpineJS variable called <x-block>darkTheme</x-block> will be offered to control the dark theme
            persisting the changes in the local storage.
        </p>
        <x-warning>
            The dark theme helper needs AlpineJS to work, and Livewire 3 automatically delivers AlpineJS only when
            there are Livewire components on the page. To ensure the dark theme helper works even if there are no
            Livewire components on the page, load AlpineJS using the <b> @verbatim @livewireScripts @endverbatim </b> directive
            <a href="https://livewire.laravel.com/docs/installation#manually-including-livewires-frontend-assets" class="underline" target="_blank">as mentioned in the documentation.</a>
        </x-warning>
        <p class="mt-4">1. Enable the dark theme support in your TailwindCSS configuration file:</p>
        <x-code language="js" :contents="$tailwindcss" disable-copy/>
        <p class="mt-4">2. Add the helper on the <x-block>html</x-block> tag of your layout:</p>
        <x-code language="blade" :contents="$helper" disable-copy/>
        <p>Alternatively, you can customize the name of the state stored in local storage of the browser, <b class="underline">default name is dark-theme</b></p>
        <x-code language="blade" :contents="$customized" disable-copy/>
        <p><u>Starting from version 1.5.3</u> you can force the <x-block>darkTheme</x-block> variable to be initialized to true:</p>
        <x-code language="blade" :contents="$initializeAsTrue" disable-copy/>
        <p class="mb-4">This is useful if your theme is dark theme by default.</p>
        <p>3. Create a button to control the dark theme:</p>
        <x-code language="blade" :contents="$button" disable-copy />
        <x-warning>
            <ul class="list-decimal list-inside text-sm marker:font-bold">
                <li>This button must be covered by the layout that received the <b>tallstackui_darkTheme</b> helper.</li>
                <li>If you prefer, <a href="{{ route('documentation.ui.theme-switch') }}" class="underline" >TallStackUI offer the Theme Switch component</a> to easily manage the dark theme.</li>
            </ul>
        </x-warning>
        <p class="mt-2">4. Rebuild your assets:</p>
        <x-code language="shell" :contents="$assets" />
        <p class="mt-2">5. Now all you need to do is adapt all your CSS classes to the dark theme variation:</p>
        <x-code language="blade" :contents="$example" disable-copy/>
    </x-section>
</x-layout>
