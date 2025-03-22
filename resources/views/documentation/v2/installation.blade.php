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
                <li>Laravel 10, 11 or 12.</li>
                <li>Livewire 3</li>
                <li>AlpineJS 3</li>
                <li>TailwindCSS 3</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Laravel 12">
        <div class="space-y-4">
            <p>
                With the release of Laravel 12, new official starter kits were introduced to the community, and among them you have
                the "Livewire" option, which will initialize a project with Laravel 12 and Livewire 3, but using the official Livewire
                component library - created by the same creator of Livewire. However, <u>this library is offered in a free format for use
                of certain components, but you need to pay to use all components in a version called "pro"</u>. If you want to initialize
                a new project using Laravel 12 and TallStackUI, you can still use the Laravel Breeze starter kit.
            </p>
            <p>
                All you have to do is <u class="font-bold">initialize the Laravel 12 project without any starter kit</u> and then include and install the
                Laravel Breeze in your project - selecting <i>"Blade with Alpine"</i> stack, and then install TallStackUI following the step-by-step instructions described below.
            </p>
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
                        Edit the <x-block>tailwind.config.js</x-block> of your application by inserting all above marked contents:
                        <x-code language="js" :contents="$tailwindcssV3" disable-copy />
                        <x-warning>
                            <ul class="list-decimal list-inside text-sm">
                                <li>Your TailwindCSS setup must load the <a href="https://tailwindcss.com/docs/plugins#forms" class="underline" target="_blank">form plugin</a></li>
                                <li>We are working to adapt the TallStackUI V2 to the TailwindCSS v4.</li>
                            </ul>
                        </x-warning>
                    @else
                        Edit the <x-block>app.css</x-block> of your application by inserting all above marked contents:
                        <x-code language="js" :contents="$tailwindcssV4" disable-copy />
                    @endif
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
