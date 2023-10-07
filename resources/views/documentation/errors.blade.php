<x-layout>
    <x-slot:title>
        Errors
    </x-slot:title>
    <x-slot:description>
        Errors component to display Livewire validation errors.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <livewire:documentation.ui.errors />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Ignoring Properties"
                        description="An option to show validation errors for specific properties."
                        language="blade"
                        :contents="$specific">
            <livewire:documentation.ui.errors :only="['name']" />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Title Customized"
                        language="blade"
                        :contents="$customized">
            <livewire:documentation.ui.errors title="Ops! There are :count validation errors:" />
        </x-code-preview>
    </x-section>
</x-layout>
