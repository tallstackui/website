<x-layout>
    <x-slot:title>
        Card
    </x-slot:title>
    <x-slot:description>
        Card component.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :background="false"
                        :contents="$basic">
            <x-card>
                TallStackUi
            </x-card>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Header Slot"
                        language="blade"
                        :background="false"
                        :contents="$header">
            <x-card>
                <x-slot:header>
                    TallStackUi
                </x-slot:header>
                TallStackUi
            </x-card>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Footer Slot"
                        language="blade"
                        :background="false"
                        :contents="$footer">
            <x-card>
                TallStackUi
                <x-slot:footer>
                    TallStackUi
                </x-slot:footer>
            </x-card>
        </x-code-preview>
    </x-section>
</x-layout>
