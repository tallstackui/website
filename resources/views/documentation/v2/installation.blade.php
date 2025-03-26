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
                <li>PHP 8.1 or later</li>
                <li>Laravel 10 or later</li>
                <li>Livewire 3</li>
                <li>AlpineJS 3</li>
                <li>TailwindCSS 3 or later</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Installation" disable-copy>
        <div class="space-y-4">
            <ul class="list-decimal list-inside space-y-4">
                <li>
                    Include the TallStackUI as a composer dependency of your project:
                    <x-code language="shell" :contents="$installation" />
                </li>
                <li>
                    Prepare your base layout
                    <x-code language="blade" :contents="$layout" disable-copy />
                    <x-warning>
                        The TallStackUI script must be loaded <b class="underline">above of the @verbatim @vite @endverbatim tag.</b>
                    </x-warning>
                </li>
                <li>
                    @if (!$tailwindcss)
                        Edit the <x-block>tailwind.config.js</x-block> of your TailwindCSS v3 by inserting all below marked contents:
                        <x-code language="js" :contents="$tailwindcssV3" disable-copy />
                    @else
                        Edit the <x-block>app.css</x-block> of your TailwindCSS v4 by inserting all below marked contents:
                        <x-code language="js" :contents="$tailwindcssV4" disable-copy />
                    @endif
                    <x-warning>
                        <ul class="list-decimal list-inside text-sm">
                            <li>{{ __('Are you using TailwindCSS :version?', ['version' => $tailwindcss ? 'v3' : 'v4']) }} <a x-on:click="$modalOpen('prefix-modal')" class="cursor-pointer underline">Click here!</a></li>
                            <li>Your TailwindCSS setup must load the <a href="https://github.com/tailwindlabs/tailwindcss-forms" class="underline" target="_blank">form plugin</a></li>
                        </ul>
                    </x-warning>
                </li>
                <li>
                    Run the following command:
                    <x-code language="shell" :contents="$build" />
                </li>
            </ul>
            <x-alert icon="check-circle" color="green">
                If you have made it this far by completing all of the steps above, you're
                probably ready to test TallStackUI in your application, but we strongly
                recommend that you continue reading the other pages in the Getting Started
                section to learn more about TallStackUI rather than trying to create your
                first components right now.
            </x-alert>
        </div>
    </x-section>
</x-layout>
