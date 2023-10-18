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
        <p>1. Run the following command to include the TallStackUi as a composer dependency:</p>
        <x-code language="shell" :contents="$installation"/>
        <p>2. Add the TallStackUi setup above the <x-block>vite</x-block> tag in your layout:</p>
        <x-code language="blade" :contents="$script"/>
        <p>If your prefer, you can add separately:</p>
        <x-code language="blade" :contents="$manual"/>
        <x-warning text="You must add the setup or directives above the @vite tag." />
        <p class="mt-4">3. Edit the <x-block>tailwindcss.config.js</x-block> of your application inserting:</p>
        <x-code language="js" :contents="$tailwindcss"/>
        <p>4. Build the assets and do a full cleanup in the Laravel:</p>
        <x-code language="shell" :contents="$build"/>
        <p>You're ready to create your first TallStackUi components.</p>
    </x-section>
    <x-section title="Livewire SPA Mode">
        <p class="text-justify">
            If you are using the new SPA mode in Livewire you must add the TallStackUi setup to the first page rendered
            in your application and persist the TallStackUi setup in all other layouts that want to use TallStackUi.
        </p>
    </x-section>
</x-layout>
