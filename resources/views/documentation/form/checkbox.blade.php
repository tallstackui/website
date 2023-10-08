<x-layout>
    <x-slot:title>
        Form Checkbox
    </x-slot:title>
    <x-slot:description>
        Form checkbox component.
    </x-slot:description>
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
            <div class="inline-flex space-x-2">
                <x-checkbox />
                <x-checkbox color="secondary" />
                <x-checkbox color="white" />
                <x-checkbox color="black" />
                <x-checkbox color="slate" />
                <x-checkbox color="gray" />
                <x-checkbox color="zinc" />
                <x-checkbox color="neutral" />
                <x-checkbox color="stone" />
                <x-checkbox color="red" />
                <x-checkbox color="orange" />
                <x-checkbox color="amber" />
                <x-checkbox color="yellow" />
                <x-checkbox color="lime" />
                <x-checkbox color="green" />
                <x-checkbox color="emerald" />
                <x-checkbox color="teal" />
                <x-checkbox color="cyan" />
                <x-checkbox color="sky" />
                <x-checkbox color="blue" />
                <x-checkbox color="indigo" />
                <x-checkbox color="violet" />
                <x-checkbox color="purple" />
                <x-checkbox color="fuchsia" />
                <x-checkbox color="pink" />
                <x-checkbox color="rose" />

            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.checkbox />
        </x-preview>
    </x-section>
</x-layout>
