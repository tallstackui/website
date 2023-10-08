<x-layout>
    <x-slot:title>
        Errors
    </x-slot:title>
    <x-slot:description>
        Errors component to display Livewire validation errors.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <livewire:documentation.ui.errors/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Ignoring Properties"
                   description="An option to show validation errors for specific properties."
                   language="blade"
                   :contents="$specific">
            <livewire:documentation.ui.errors :only="['name']"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Title Customized"
                   language="blade"
                   :contents="$customized">
            <livewire:documentation.ui.errors title="Ops! There are :count validation errors:"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   description="You can use any color from the TailwindCSS palette."
                   language="blade"
                   :contents="$colors">
            <livewire:documentation.ui.errors color="sky" />
        </x-preview>
    </x-section>
</x-layout>
