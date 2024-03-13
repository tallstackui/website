<x-layout :torchlight="false">
    <x-slot:title>
        Label Component
    </x-slot:title>
    <x-slot:description>
        The generic label component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="label" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
