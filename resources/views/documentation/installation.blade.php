<x-layout torchlight>
    <x-slot:title>
        Installation
    </x-slot:title>
    <x-section title="Requirements" disable-copy>
        <p>TallStackUI was created with a <b class="font-semibold text-pink-500 underline">focus on Livewire 3</b> so the usage requirements are:</p>
        <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
            <li>PHP 8.1 or above</li>
            <li>Laravel 10 or Laravel 11</li>
            <li>Livewire 3</li>
            <li>TailwindCSS 3</li>
        </ul>
    </x-section>
    <x-section title="Installation" disable-copy>
        <p>1. Include the TallStackUI as a composer dependency of your project:</p>
        <x-code language="shell" :contents="$installation" />
        <p>2. Prepare your base layout:
        <x-code language="blade" :contents="$layout" disable-copy />
        <x-warning>
            The TallStackUI script must be loaded <b class="underline">above of the the @verbatim @vite @endverbatim tag.</b>
        </x-warning>
        <p class="mt-4">3. Edit the <x-block>tailwind.config.js</x-block> of your application inserting this content:</p>
        <x-code language="js" :contents="$tailwindcss" disable-copy />
        <x-warning>
            Your TailwindCSS setup must load the <a href="https://tailwindcss.com/docs/plugins#forms" class="underline" target="_blank">form plugin</a>
        </x-warning>
        <p class="mt-4">4. Run the following command:</p>
        <x-code language="shell" :contents="$build" />
    </x-section>
    <div class="pb-4">
        <x-alert icon="check-circle" color="green">
            If you've gotten this far by completing all the steps above, you're probably ready
            to try TallStackUI in your projects. Continue reading the rest of the content on
            this page to improve your knowledge in this first contact with the TallStackUI.
        </x-alert>
    </div>
    <x-section title="Component Prefix" disable-copy>
        <p>
            Although TallStackUI offers many components out of the box, you may want to create Blade components
            with the same names as TallStackUI components, or you can even start a new Laravel project with Laravel
            Breeze or Laravel JetStream and continue using some of the components they have offer, for example the
            <x-block>x-dropdown</x-block> component. For cases like this, <u>where there are name conflicts</u>,
            you can define a prefix for the TallStackUI components through the configuration file:
        </p>
        <x-warning class="mb-4 mt-2">
            <a href="{{ route('documentation.configuration') }}" class="underline" target="_blank">
                You must publish the configuration file to be able to edit your content.
            </a>
        </x-warning>
        <x-code :contents="$prefixing" disable-copy />
        <p>
            As the annotation itself mentions, when using a prefix, for example,
            like <x-block>ts-</x-block> then the way of using all TallStackUI components will be with <x-block>ts-</x-block>,
            for example:
        </p>
        <x-code language="blade" :contents="$prefixExamples" disable-copy />
        <p>
            <u>Starting from version 1.20</u>, you can configure the prefix directly through the terminal using this command:
        </p>
        <x-code language="shell" :contents="$prefixCommand" />
    </x-section>
    <x-section title="AlpineJS Requirement" disable-copy>
        <p>
            Livewire 3 brings AlpineJS together when you have Livewire components in the page. This made life
            easier for TallStack developers, but it brought up one concern that you need to be aware of.
            <u>You need to ensure that AlpineJS is always available, even when you are not in a Livewire
            component but want to use TallStackUI components.</u> To do this, make sure you load AlpineJS
            independently of Livewire:
        </p>
        <x-code language="blade" :contents="$alpine" disable-copy />
        <a href="https://livewire.laravel.com/docs/installation#manually-including-livewires-frontend-assets" class="underline" target="_blank">Learn more about it in the Livewire documentation.</a>
    </x-section>
    <x-section title="Livewire SPA Mode" disable-copy>
        <p>
            If you are using the new Livewire SPA mode you must load the TallStackUI in the first page rendered
            in your application and persist in all other pages that want to use TallStackUI. For example, if your
            applications has a <x-block>welcome.blade.php</x-block> which is the first page rendered, so it must
            contain the script of the TallStackUI <i>(step 3 of the installation, at this same page)</i> and
            also the next ones, when navigating using <x-block>wire:navigate</x-block>. This is necessary
            because using Livewire's SPA mode, Livewire only evaluates what is a script and the TallStackUI
            script loader is not actually a script, but rather a route to a script.
        </p>
    </x-section>
</x-layout>
