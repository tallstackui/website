<x-layout>
    <x-slot:title>
        Form Toggle
    </x-slot:title>
    <x-slot:description>
        Form Toggle component.
    </x-slot:description>
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
            <div class="inline-flex gap-[2px]">
                <x-toggle />
                <x-toggle color="secondary" />
                <x-toggle color="white" />
                <x-toggle color="black" />
                <x-toggle color="slate" />
                <x-toggle color="gray" />
                <x-toggle color="zinc" />
                <x-toggle color="neutral" />
                <x-toggle color="stone" />
                <x-toggle color="red" />
                <x-toggle color="orange" />
                <x-toggle color="amber" />
                <x-toggle color="yellow" />
                <x-toggle color="lime" />
                <x-toggle color="green" />
                <x-toggle color="emerald" />
                <x-toggle color="teal" />
                <x-toggle color="cyan" />
                <x-toggle color="sky" />
                <x-toggle color="blue" />
                <x-toggle color="indigo" />
                <x-toggle color="violet" />
                <x-toggle color="purple" />
                <x-toggle color="fuchsia" />
                <x-toggle color="pink" />
                <x-toggle color="rose" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.toggle />
        </x-preview>
    </x-section>
</x-layout>
