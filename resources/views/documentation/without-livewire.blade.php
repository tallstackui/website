@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Without Livewire</x-slot>
    <x-slot:description>
        TallStackUI Form Components Without Livewire.
    </x-slot>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI is a component library designed for Livewire, but
                after many requests from the community, we have adapted
                TallStackUI to work perfectly well outside of Livewire
                components. Give a form component a
                <x-block>name</x-block>
                instead of a
                <x-block>wire:model</x-block>
                and it renders a hidden input carrying the value, so the server
                receives it like any other field.
                <x-block>value</x-block>
                seeds the initial state.
            </p>
            <div class="mt-2 space-y-2">
                <p class="text-md font-medium">
                    Components that CANNOT be used out of a Livewire component
                    ❌
                </p>
                <ul class="list-inside list-decimal">
                    <li>KeyValue</li>
                    <li>Loading</li>
                    <li>Reaction</li>
                    <li>Signature</li>
                    <li>Upload</li>
                </ul>
                <p>
                    Any other component not listed above can be used outside of
                    Livewire components. Livewire's script still has to be on
                    the page, since that is where AlpineJS comes from.
                </p>
            </div>
            <x-warning info title="Table left the list on 4.x">
                <x-block>x-table</x-block>
                no longer requires the Livewire context, and
                <x-block>x-upload.async</x-block>
                works outside it too.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Example" disable-copy>
        <x-code language="blade" :contents="$example" disable-copy />
    </x-section>
    <x-section title="Supported Form Components" new disable-copy>
        <div class="space-y-4">
            <p>
                Nine of these carry a browser test that renders a real form on a
                plain Blade page, submits it and asserts what the controller
                received. Writing them turned up three defects fixed on
                <x-block>4.x</x-block>
                : Calendar never filled its hidden input, Tag submitted the form
                on the first tag, and Autocomplete had never been adapted at
                all.
            </p>
            <x-code language="blade" :contents="$supported" disable-copy />
        </div>
    </x-section>
    <x-section title="Table" new disable-copy>
        <div class="space-y-4">
            <p>
                Pagination becomes anchors built from the URLs the paginator
                already exposes, sorting becomes an anchor carrying the inverted
                direction, and the filter rewrites
                <x-block>location</x-block>
                through AlpineJS.
                <x-block>loading</x-block>
                needs
                <x-block>wire:loading</x-block>
                and is not rendered.
            </p>
            <x-code language="blade" :contents="$table" disable-copy />
        </div>
    </x-section>
    <x-section title="Parse Request Value" disable-copy>
        <p class="mt-2">
            Some components, such as: select.styled, date, tags and some others,
            send an array to the backend when the form is submitted. In these
            cases you must use the PHP
            <x-block>json_decode</x-block>
            function to access the items of the array.
        </p>
        <p class="mt-4">
            <b>1)</b>
            Preparing the form:
        </p>
        <x-code language="blade" :contents="$jsonDecodeBlade" disable-copy />
        <p>
            <b>2)</b>
            Intercepting the request and parsing it using
            <x-block>json_decode</x-block>
            to access the array of items:
        </p>
        <x-code :contents="$jsonDecodeController" disable-copy />
    </x-section>
</x-layout>
