<x-layout torchlight>
    <x-slot:title>
        Installation
    </x-slot:title>
    <x-section title="Requirements">
        <p>TallStackUi was created with a <b class="font-semibold text-pink-500 underline">focus on Livewire 3</b> so the usage requirements are:</p>
        <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
            <li>Laravel 10</li>
            <li>Livewire 3</li>
            <li>PHP 8.1</li>
        </ul>
    </x-section>
    <x-section title="Installation">
        <p>1. Run the following command to include the TallStackUI as a composer dependency:</p>
        <x-code language="shell" :contents="$installation" />
        <p>2. Prepare the AlpineJS <x-block>x-cloak</x-block> directive:</p>
        <x-code language="blade" :contents="$cloak" :copy="false" />
        <p>3. Add the TallStackUI script above the <x-block>vite</x-block> tag in your layout:</p>
        <x-code language="blade" :contents="$script" :copy="false" />
        <p>If you prefer, you can add then separately:</p>
        <x-code language="blade" :contents="$manual" :copy="false" />
        <x-warning text="You must add above the @vite tag." />
        <p class="mt-4">4. Edit the <x-block>tailwindcss.config.js</x-block> of your application inserting this content:</p>
        <x-code language="js" :contents="$tailwindcss" :copy="false" />
        <p class="mt-4">5. Build the assets and do a full cleanup in the Laravel:</p>
        <x-code language="shell" :contents="$build" />
        <div class="mt-4">
            <x-alert icon="check" color="green">
                You're ready to create your first TallStackUI components.
            </x-alert>
        </div>
    </x-section>
    <x-section title="Livewire SPA Mode">
        <p>
            If you are using the new Livewire SPA mode you must load the TallStackUI to the first page rendered
            in your application and persist in all other pages that want to use TallStackUi.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.get-started') }}" text="Get Started" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.form.input') }}" text="Form Input" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
