<x-layout :$content>
    <x-slot:title>Installation</x-slot>
    <x-section class="mt-4" title="Meet TallStackUI" disable-copy>
        TallStackUI is a powerful suite of 80+ ready-to-use components for TALL
        Stack applications. TallStackUI is unlike anything you've ever seen,
        from its conception to construction and general availability. Beforehand
        we want to tell you a little about our motivation.
    </x-section>
    <x-section class="space-y-4" title="History & Motivation" disable-copy>
        TallStackUI was created by
        <a
            href="https://linkedin.com/in/devajmeireles"
            class="underline"
            target="_blank"
        >
            AJ Meireles
        </a>
        , a
        <i>FullStack</i>
        PHP developer for 10 years, passionate about the Laravel and Livewire
        ecosystem, especially the TALL Stack, a universe of possibilities with
        little time and effort.
        <a
            href="https://linkedin.com/in/devajmeireles"
            class="underline"
            target="_blank"
        >
            AJ
        </a>
        is an active developer in the community, contributing to Laravel,
        Livewire, PestPHP and other open-source solutions.
    </x-section>
    <x-section title="Requirements" disable-copy>
        <div class="space-y-4">
            <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
                <li>PHP: v8.1 or later</li>
                <li>Laravel: v10 or later</li>
                <li>Livewire: v4 or later</li>
                <li>AlpineJS: v3 or later</li>
                <li>TailwindCSS: v4 or later</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Starter Kit" disable-copy>
        Do you want to save time by using an already created base project with
        all you need: Laravel 13, Livewire 4, TallStackUI 4 and TailwindCSS 4?
        Discover the official
        <b>TallStackUI starter kit for Laravel 13</b>
        and save time on a new project creation.
        <x-refer doc="starter-kit">Click here!</x-refer>
    </x-section>
    <x-section title="Manual Installation" disable-copy>
        <div class="space-y-4">
            <ul class="list-inside list-decimal space-y-4">
                <li>
                    Include the TallStackUI as a composer dependency of your
                    project:
                    <x-code language="shell" :contents="$installation" />
                </li>
                <li>
                    Prepare your base layout
                    <x-code
                        language="blade"
                        :contents="$layout"
                        disable-copy
                    />
                    <x-warning>
                        The TallStackUI script must be loaded
                        <b class="underline">
                            above of the
                            @verbatim @vite @endverbatim

                            tag.
                        </b>
                    </x-warning>
                </li>
                <li>
                    Edit the
                    <x-block>app.css</x-block>
                    of your TailwindCSS v4 by inserting all below marked
                    contents:
                    <x-code
                        language="js"
                        :contents="$tailwindcssV4"
                        disable-copy
                    />
                </li>
                <li>
                    Run the following command:
                    <x-code language="shell" :contents="$build" />
                </li>
            </ul>
            <x-warning icon="check-circle" success>
                If you have made it this far by completing all of the steps
                above, you're probably ready to test TallStackUI in your
                application, but we strongly recommend that you continue reading
                the other pages in the Getting Started section to learn more
                about TallStackUI rather than trying to create your first
                components right now.
            </x-warning>
        </div>
    </x-section>
</x-layout>
