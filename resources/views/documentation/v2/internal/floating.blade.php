<x-layout :torchlight="false">
    <x-slot:title>
        Floating Component
    </x-slot:title>
    <x-slot:description>
        The generic floating component used in: form date, form time, form
        password, form upload, form color, dropdown, and select styled.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Floating" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-section class="mt-4">
        <p>
            The list of components that use floating:
        </p>
        <ul class="mt-2 list-decimal list-inside">
            <li><a href="{{ route('documentation.v2.form.input') }}" wire:navigate>Form Date</a></li>
            <li><a href="{{ route('documentation.v2.form.time') }}" wire:navigate>Form Time</a></li>
            <li><a href="{{ route('documentation.v2.form.password') }}" wire:navigate>Form Password</a></li>
            <li><a href="{{ route('documentation.v2.form.upload') }}" wire:navigate>Form Upload</a></li>
            <li><a href="{{ route('documentation.v2.form.color') }}" wire:navigate>Form Color</a></li>
            <li><a href="{{ route('documentation.v2.ui.dropdown') }}" wire:navigate>Dropdown</a></li>
            <li><a href="{{ route('documentation.v2.form.select') }}" wire:navigate>Select</a></li>
        </ul>
    </x-section>
</x-layout>
