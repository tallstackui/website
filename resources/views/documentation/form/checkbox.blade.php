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
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.checkbox />
        </x-preview>
    </x-section>
</x-layout>
