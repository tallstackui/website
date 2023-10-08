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
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="inline-flex space-x-2">
                <x-radio />
                <x-radio color="secondary" />
                <x-radio color="white" />
                <x-radio color="black" />
                <x-radio color="slate" />
                <x-radio color="gray" />
                <x-radio color="zinc" />
                <x-radio color="neutral" />
                <x-radio color="stone" />
                <x-radio color="red" />
                <x-radio color="orange" />
                <x-radio color="amber" />
                <x-radio color="yellow" />
                <x-radio color="lime" />
                <x-radio color="green" />
                <x-radio color="emerald" />
                <x-radio color="teal" />
                <x-radio color="cyan" />
                <x-radio color="sky" />
                <x-radio color="blue" />
                <x-radio color="indigo" />
                <x-radio color="violet" />
                <x-radio color="purple" />
                <x-radio color="fuchsia" />
                <x-radio color="pink" />
                <x-radio color="rose" />
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
