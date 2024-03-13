<x-layout :torchlight="false">
    <x-slot:title>
        Hint Component
    </x-slot:title>
    <x-slot:description>
        The generic hint component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="hint" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
