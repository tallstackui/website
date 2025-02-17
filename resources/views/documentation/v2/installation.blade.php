<x-layout :$content>
    <x-slot:title>
        Installation
    </x-slot:title>
    <x-section class="mt-4" title="Meet TallStackUI" disable-copy>
        TallStackUI is <b class="text-pink-600">a powerful suite of 30+ ready-to-use components for TALL Stack applications.</b>
        TallStackUI is unlike anything you've ever seen, from its conception to construction and general
        availability. Beforehand we want to tell you a little about our motivation.
    </x-section>
    <x-section class="space-y-4" title="History & Motivation" disable-copy>
        TallStackUI was created by <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a>,
        a <i>FullStack</i> PHP developer for 10 years, passionate about the Laravel and Livewire ecosystem, especially the TALL Stack,
        a universe of possibilities with little time and effort. <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a> is an active developer in the community,
        contributing to Laravel, Livewire, PestPHP and other open-source solutions.
    </x-section>
    <x-section title="Requirements" disable-copy>
        <div class="space-y-4">
            <p>TallStackUI was created with a <b class="font-semibold text-pink-500 underline">focus on Livewire 3</b> so the usage requirements are:</p>
            <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
                <li>PHP 8.1 or above</li>
                <li>Laravel 10 or Laravel 11</li>
                <li>Livewire 3</li>
                <li>AlpineJS 3</li>
                <li>TailwindCSS 3</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Installation" disable-copy>
        <div class="space-y-4">
            <p>1. Include the TallStackUI as a composer dependency of your project:</p>
            <x-code language="shell" :contents="$installation" />
            <p>2. Prepare your base layout:
                <x-code language="blade" :contents="$layout" disable-copy />
                <x-warning>
                    The TallStackUI script must be loaded <b class="underline">above of the @verbatim @vite @endverbatim tag.</b>
                </x-warning>
            <p class="mt-4">3. Edit the <x-block>tailwind.config.js</x-block> of your application by inserting all above marked contents:</p>
            <x-code language="js" :contents="$tailwindcss" disable-copy unpadding />
            <x-warning>
                Your TailwindCSS setup must load the <a href="https://tailwindcss.com/docs/plugins#forms" class="underline" target="_blank">form plugin</a>
            </x-warning>
            <p class="mt-4">4. Run the following command:</p>
            <x-code language="shell" :contents="$build" />
        </div>
    </x-section>
    <div class="pb-4">
        <x-alert icon="check-circle" color="green">
            If you've made it this far by completing all of the steps above, you're
            probably ready to test TallStackUI in your application, but we strongly
            recommend that you continue reading the other pages in the Getting Started
            section to learn more about TallStackUI rather than trying to create your
            first components right now.
        </x-alert>
    </div>
</x-layout>
