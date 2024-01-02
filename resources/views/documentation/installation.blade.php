<x-layout torchlight>
    <x-slot:title>
        Installation
    </x-slot:title>
    <x-section title="Requirements" :copy="false">
        <p>TallStackUI was created with a <b class="font-semibold text-pink-500 underline">focus on Livewire 3</b> so the usage requirements are:</p>
        <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
            <li>PHP 8.x</li>
            <li>Laravel 10</li>
            <li>Livewire 3</li>
            <li>TailwindCSS 3</li>
        </ul>
    </x-section>
    <x-section title="Installation" :copy="false">
        <p>1. Run the following command to include the TallStackUI as a composer dependency:</p>
        <x-code language="shell" :contents="$installation" />
        <p>2. Prepare the AlpineJS <x-block>x-cloak</x-block> directive:</p>
        <x-code language="blade" :contents="$cloak" :copy="false" />
        <p>3. Add the TallStackUI script above the <x-block>vite</x-block> tag in your layout:</p>
        <x-code language="blade" :contents="$script" :copy="false" />
        <p class="mt-4">4. Edit the <x-block>tailwind.config.js</x-block> of your application inserting this content:</p>
        <x-code language="js" :contents="$tailwindcss" :copy="false" />
        <x-warning>
            Your TailwindCSS setup must also load the <a href="https://tailwindcss.com/docs/plugins#forms" class="underline" target="_blank">form plugin</a>
        </x-warning>
        <p class="mt-4">5. Build the assets and do a full cleanup in the Laravel:</p>
        <x-code language="shell" :contents="$build" />
    </x-section>
    <x-section title="Component Prefix" :copy="false">
        <p>
            Although TallStackUI offers many components out of the box, you may want to create Blade components
            with the same names as TallStackUI components, or you can even start a new Laravel project with Laravel
            Breeze or Laravel JetStream and continue using some of the components they have offer, as <x-block>dropdown</x-block>.
            For cases like this, <u>where there are name conflicts</u>, you can define a prefix for the TallStackUI
            components through the configuration file:
        </p>
        <x-warning class="mb-4 mt-2">
            You must publish the configuration file to be able to edit it.
            <a href="{{ route('documentation.configuration') }}" class="underline" target="_blank">Learn more about it by clicking here.</a>
        </x-warning>
        <x-code :contents="$prefixing" :copy="false" />
        <p>
            As the annotation itself mentions, when using a prefix, for example,
            like <x-block>ts-</x-block> then the way of using all TallStackUI components will be with <x-block>ts-</x-block>,
            for example:
        </p>
        <x-code language="blade" :contents="$prefixExamples" :copy="false" />
    </x-section>
    <x-section title="AlpineJS Requirement" :copy="false">
        <p>
            Livewire 3 brings AlpineJS together when you have Livewire components in the page. This made life
            easier for TallStack developers, but it brought up one concern that you need to be aware of.
            <u>You need to ensure that AlpineJS is always available, even when you are not in a Livewire
            component but want to use TallStackUI components.</u> To do this, make sure you load AlpineJS
            independently of Livewire:
        </p>
        <x-code language="blade" :contents="$alpine" :copy="false" />
        <a href="https://livewire.laravel.com/docs/installation#manually-including-livewires-frontend-assets" class="underline" target="_blank">Learn more about it in the Livewire documentation.</a>
    </x-section>
    <x-section title="Livewire SPA Mode" :copy="false">
        <p>
            If you are using the new Livewire SPA mode you must load the TallStackUI to the first page rendered
            in your application and persist in all other pages that want to use TallStackUI.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.get-started')" text="Get Started" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.input')" text="Form Input" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
