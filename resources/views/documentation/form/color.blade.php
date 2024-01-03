<x-layout>
    <x-slot:title>
        Form Color
        <x-slot:version>
            v1.5
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form color component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="color" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-color />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-color label="Color" hint="Select your favorite color or insert a hexadecimal value." />
        </x-preview>
    </x-section>
    <x-section title="Picker Mode" description="An option to pick the color using a different selector.">
        <x-preview language="blade" :contents="$picker">
            <x-color picker />
        </x-preview>
    </x-section>
    <x-section title="Selectable" description="An option to force the color selection through the color selector box.">
        <x-preview language="blade" :contents="$selectable">
            <x-color selectable picker />
        </x-preview>
        <x-warning class="mt-4">
            This will transform the input in readonly and open the color selector box when the input is clicked.
        </x-warning>
    </x-section>
    <x-section title="Custom Colors" description="An option to specific your own hexadecimal colors.">
        <x-preview language="blade" :contents="$custom">
            <x-color :colors="['#83493D', '#3D8357', '#693D83', '#3AB3D1', '#5DD116']" />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-color invalidate />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.password')" text="Form Password" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.textarea')" text="Form Textarea" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
