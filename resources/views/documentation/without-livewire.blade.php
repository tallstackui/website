@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Without Livewire
        <x-slot:version>
            1.5.3
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        TallStackUI Form Components Without Livewire.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        TallStackUI is a component library that was designed for Livewire 3, but after various
        requests from the entire user community, <u>starting from version 1.5.3</u> <b>you can use form
        components out of Livewire components.</b> Check below the list of all components that
        can be used out of Livewire components, and also those that cannot.
        <div class="mt-2 space-y-2">
            <p class="text-lg font-medium">Can be used out of Livewire component ✅</p>
            <ul class="ml-2 list-inside list-decimal marker:font-bold">
                <li>Checkbox</li>
                <li>Color</li>
                <li>Date</li>
                <li>Input</li>
                <li>Number</li>
                <li>Password</li>
                <li>Pin</li>
                <li>Radio</li>
                <li>Range</li>
                <li>Tag</li>
                <li>Time</li>
                <li>Textarea</li>
                <li>Toggle</li>
                <li>Select</li>
            </ul>
            <p class="text-lg font-medium">Can't be used out of Livewire component ❌</p>
            <ul class="ml-2 list-inside list-decimal marker:font-bold">
                <li>Loading</li>
                <li>Upload</li>
                <li>Reactions</li>
                <li>Table</li>
            </ul>
            <x-warning>
                Many other components can be used out of Livewire components, such as alert,
                modal, dropdown, etc. These are components that do not contain any logic that
                depends on Livewire.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Example" disable-copy>
        <x-code language="blade" :contents="$example" disable-copy />
    </x-section>
    <x-section title="Parse Request Value" disable-copy>
        <p class="mt-2">
            Some components, such as <x-block>select.styled, date, tags</x-block> and others, send an array to the backend
            when the form is submitted. In these cases you must use the PHP <x-block>json_decode</x-block> function to access the items of the array.
        </p>
        <p class="mt-4"><b>1)</b> Preparing the Blade:</p>
        <x-code language="blade" :contents="$jsonDecodeBlade" disable-copy />
        <p><b>2)</b> Using the PHP <x-block>json_decode</x-block> to access the array of items:</p>
        <x-code :contents="$jsonDecodeController" disable-copy />
    </x-section>
</x-layout>
