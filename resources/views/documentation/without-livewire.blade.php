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
            that you help us <x-link href="https://github.com/tallstackui/tallstackui/issues/new/choose" blank underline :color="null">
            by submitting a bug report.</x-link></b> The only requirement, as shown in the example above, is
            that the components receive the <x-block>name</x-block> attribute, including so that validation error messages
            are displayed correctly. Specifically for the <x-block>select</x-block> and <x-block>pin</x-block> components, a "hidden" input
            will be added to the page with the name of the attribute passed to these components. Still talking
            about the <x-block>select</x-block> component, it is expected that you can use it with all available options,
            similar to how we use it via Livewire.
        </p>
        <p class="mt-6">
            For cases where you want to use the <x-block>select.styled</x-block> component with the <x-block>multiple</x-block> option,
            then obtaining the value in the controller must do the <x-block>json_decode</x-block> of the value:
        </p>
        <p class="mt-4"><b>1)</b> Blade:</p>
        <x-code language="blade" :contents="$jsonDecodeBlade" disable-copy />
        <p><b>2)</b> Controller:</p>
        <x-code :contents="$jsonDecodeController" disable-copy />
    </x-section>
</x-layout>
