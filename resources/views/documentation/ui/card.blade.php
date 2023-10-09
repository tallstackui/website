<x-layout>
    <x-slot:title>
        Card
    </x-slot:title>
    <x-slot:description>
        Card component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="card" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :background="false"
                   :contents="$basic">
            <x-card>
                TallStackUi
            </x-card>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Header Slot"
                   language="blade"
                   :background="false"
                   :contents="$header">
            <x-card>
                <x-slot:header>
                    TallStackUi
                </x-slot:header>
                TallStackUi
            </x-card>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Footer Slot"
                   language="blade"
                   :background="false"
                   :contents="$footer">
            <x-card>
                TallStackUi
                <x-slot:footer>
                    TallStackUi
                </x-slot:footer>
            </x-card>
        </x-preview>
    </x-section>
</x-layout>
