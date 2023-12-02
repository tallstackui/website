<x-layout>
    <x-slot:title>
        Form Checkbox
    </x-slot:title>
    <x-slot:description>
        Form checkbox component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="checkbox" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-checkbox />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-checkbox label="Receive Alert" />
                <x-checkbox label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-checkbox sm />
                <x-checkbox md />
                <x-checkbox lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-checkbox label="Primary" checked />
                <x-checkbox color="secondary" label="Secondary" checked />
                <x-checkbox color="slate" label="Slate" checked />
                <x-checkbox color="gray" label="Gray" checked />
                <x-checkbox color="zinc" label="Zinc" checked />
                <x-checkbox color="neutral" label="Neutral" checked />
                <x-checkbox color="stone" label="Stone" checked />
                <x-checkbox color="red" label="Red" checked />
                <x-checkbox color="orange" label="Orange" checked />
                <x-checkbox color="amber" label="Amber" checked />
                <x-checkbox color="yellow" label="Yellow" checked />
                <x-checkbox color="lime" label="Lime" checked />
                <x-checkbox color="green" label="Green" checked />
                <x-checkbox color="emerald" label="Emerald" checked />
                <x-checkbox color="teal" label="Teal" checked />
                <x-checkbox color="cyan" label="Cyan" checked />
                <x-checkbox color="sky" label="Sky" checked />
                <x-checkbox color="blue" label="Blue" checked />
                <x-checkbox color="indigo" label="Indigo" checked />
                <x-checkbox color="violet" label="Violet" checked />
                <x-checkbox color="purple" label="Purple" checked />
                <x-checkbox color="fuchsia" label="Fuchsia" checked />
                <x-checkbox color="pink" label="Pink" checked />
                <x-checkbox color="rose" label="Rose" checked />
                <x-checkbox color="black" label="Black" checked />
                <x-checkbox color="white" label="White" checked />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.textarea')" text="Form Textarea" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.radio')" text="Form Radio" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
