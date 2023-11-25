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
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-checkbox />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label"
                   language="blade"
                   :contents="$label">
            <div class="space-y-2">
                <x-checkbox label="Receive Alert" />
                <x-checkbox label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-checkbox sm />
                <x-checkbox md />
                <x-checkbox lg />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="space-y-2">
                <x-checkbox label="Primary" />
                <x-checkbox color="secondary" label="Secondary" />
                <x-checkbox color="slate" label="Slate" />
                <x-checkbox color="gray" label="Gray" />
                <x-checkbox color="zinc" label="Zinc" />
                <x-checkbox color="neutral" label="Neutral" />
                <x-checkbox color="stone" label="Stone" />
                <x-checkbox color="red" label="Red" />
                <x-checkbox color="orange" label="Orange" />
                <x-checkbox color="amber" label="Amber" />
                <x-checkbox color="yellow" label="Yellow" />
                <x-checkbox color="lime" label="Lime" />
                <x-checkbox color="green" label="Green" />
                <x-checkbox color="emerald" label="Emerald" />
                <x-checkbox color="teal" label="Teal" />
                <x-checkbox color="cyan" label="Cyan" />
                <x-checkbox color="sky" label="Sky" />
                <x-checkbox color="blue" label="Blue" />
                <x-checkbox color="indigo" label="Indigo" />
                <x-checkbox color="violet" label="Violet" />
                <x-checkbox color="purple" label="Purple" />
                <x-checkbox color="fuchsia" label="Fuchsia" />
                <x-checkbox color="pink" label="Pink" />
                <x-checkbox color="rose" label="Rose" />
                <x-checkbox color="black" label="Black" />
                <x-checkbox color="white" label="White" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.form.textarea') }}" text="Form Textarea" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.form.radio') }}" text="Form Radio" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
