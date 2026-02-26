@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
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
        <div class="space-y-4">
            <p>
                TallStackUI is a component library designed for Livewire 3, but after many requests from the community,
                we have adapted TallStackUI to work perfectly well outside of Livewire components. For your convenience,
                below is a list of components that DO NOT WORK outside of the Livewire component context.
            </p>
            <div class="mt-2 space-y-2">
                <p class="text-md font-medium">Examples of components that CANNOT be used out of Livewire component ❌</p>
                <ul class="list-inside list-decimal">
                    <li>KeyValue</li>
                    <li>Loading</li>
                    <li>Reactions</li>
                    <li>Signature</li>
                    <li>Table</li>
                    <li>Upload</li>
                </ul>
                <p>
                    Any other component not listed above can be used outside of Livewire components.
                </p>
            </div>
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
