<x-layout :torchlight="false">
    <x-slot:title>
        Error Component
    </x-slot:title>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="error" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.interaction.toast') }}" text="Toast" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.internal.hint') }}" text="Internal Hint" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
