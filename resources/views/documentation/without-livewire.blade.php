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
        requests from the entire user community, <u>starting from version 1.5.3</u> you can use form
        components out of Livewire components. Before version 1.5.3 you could already use the
        form components, but some did not work well and the error validation messages required
        a certain "workaround" to work. Now all components can be used, including selects. See
        the examples below to learn how to use it.
    </x-section>
    <x-section title="Example" disable-copy>
        <x-code language="blade" :contents="$example" disable-copy />
    </x-section>
    <x-section title="Concerns" disable-copy>
        <p>
            As you can see in the example above, all form components can be used in a form out of
            the Livewire context. If you notice that something is not working correctly, <b>we ask
            that you help us <x-link :href="$issues" blank underline :color="null">
            by submitting a bug report.</x-link></b> The only requirement, as shown in the example above, is
            that the components receive the <x-block>name</x-block> attribute, including so that validation error messages
            are displayed correctly.
        </p>
        <p class="mt-2">
            Some components, such as <x-block>select.styled, dates, tags</x-block> send an array to the backend,
            in these cases you must use the <x-block>json_decode</x-block> function to access the items of the array.
        </p>
        <p class="mt-4"><b>1)</b> Preparing the Blade:</p>
        <x-code language="blade" :contents="$jsonDecodeBlade" disable-copy />
        <p><b>2)</b> Using the <x-block>json_decode</x-block> to access the array of items:</p>
        <x-code :contents="$jsonDecodeController" disable-copy />
    </x-section>
</x-layout>
