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
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.internal.error') }}" text="Internal Error" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.internal.label') }}" text="Internal Label" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
