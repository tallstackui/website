<x-layout>
    <x-slot:title>
        Form Toggle
    </x-slot:title>
    <x-slot:description>
        Form Toggle component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="toggle" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-toggle />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label"
                   language="blade"
                   :contents="$label">
            <div class="space-y-2">
                <x-toggle label="Receive Alert" />
                <x-toggle label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-toggle sm />
                <x-toggle md />
                <x-toggle lg />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="space-y-2">
                <x-toggle label="Primary" />
                <x-toggle color="secondary" label="Secondary" />
                <x-toggle color="slate" label="Slate" />
                <x-toggle color="gray" label="Gray" />
                <x-toggle color="zinc" label="Zinc" />
                <x-toggle color="neutral" label="Neutral" />
                <x-toggle color="stone" label="Stone" />
                <x-toggle color="red" label="Red" />
                <x-toggle color="orange" label="Orange" />
                <x-toggle color="amber" label="Amber" />
                <x-toggle color="yellow" label="Yellow" />
                <x-toggle color="lime" label="Lime" />
                <x-toggle color="green" label="Green" />
                <x-toggle color="emerald" label="Emerald" />
                <x-toggle color="teal" label="Teal" />
                <x-toggle color="cyan" label="Cyan" />
                <x-toggle color="sky" label="Sky" />
                <x-toggle color="blue" label="Blue" />
                <x-toggle color="indigo" label="Indigo" />
                <x-toggle color="violet" label="Violet" />
                <x-toggle color="purple" label="Purple" />
                <x-toggle color="fuchsia" label="Fuchsia" />
                <x-toggle color="pink" label="Pink" />
                <x-toggle color="rose" label="Rose" />
                <x-toggle color="black" label="Black" />
                <x-toggle color="white" label="White" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   description="Press the save button to see the validation error."
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.toggle />
        </x-preview>
    </x-section>
</x-layout>
