<x-layout>
    <x-slot:title>
        Get Started
    </x-slot:title>
    <x-section title="Requirements" id="requirements">
        <p>TallStackUi was created with a <b class="font-bold underline">focus on Livewire 3</b> so the usage requirements are:</p>
        <ul class="mt-4 ml-4 list-inside list-decimal space-y-2">
            <li>Laravel 10</li>
            <li>Livewire 3</li>
            <li>PHP 8.1</li>
        </ul>
    </x-section>
    <x-section class="space-y-4" title="Installation" id="installation">
        <p>1. Run the following command to TallStackUi as a composer dependency:</p>
        <x-code language="shell" :contents="$installation" />
        <p>2. Add the TallStackUi tag above the <x-block>@verbatim @vite @endverbatim</x-block>directive at your Blade template:</p>
        <x-code language="blade" :contents="$layout" />
        <p>Obviously you can add separately: <x-block>@verbatim @tallStackUiScripts @endverbatim</x-block> and <x-block>@verbatim @tallStackUiStyles @endverbatim</x-block></p>
        <p>3. Run the following commands:</p>
        <x-code language="shell" :contents="$command" />
        <p><b>Let the game begin!</b> You're ready to create your first TallStackUi components.</p>
    </x-section>
</x-layout>
