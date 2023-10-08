<x-layout>
    <x-slot:title>
        Form Radio
    </x-slot:title>
    <x-slot:description>
        Form radio component.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-radio />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label"
                   language="blade"
                   :contents="$label">
            <div class="space-y-2">
                <x-radio label="Receive Alert" />
                <x-radio label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-radio sm />
                <x-radio md />
                <x-radio lg />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.radio />
        </x-preview>
    </x-section>
</x-layout>
