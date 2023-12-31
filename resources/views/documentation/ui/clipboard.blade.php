<x-layout>
    <x-slot:title>
        Clipboard
        <x-slot:version>
            1.7
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Clipboard component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="clipboard" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-clipboard>
                TallStackUi
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Button at Left">
        <x-preview language="blade" :contents="$left">
            <x-clipboard left>
                TallStackUi
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-clipboard label="Library" hint="Copy the name of the library">
                TallStackUi
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Secret Content" description="An option to transform the input in a password type.">
        <x-preview language="blade" :contents="$secret">
            <x-clipboard label="Library" hint="Copy the name of the library" secret>
                TallStackUi
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Icon Style">
        <x-preview language="blade" :contents="$icon">
            <x-clipboard icon>
                TallStackUi
            </x-clipboard>
        </x-preview>
        <x-warning class="mt-4">
            The icon style does not support label and hint.
        </x-warning>
    </x-section>
    <x-section title="Using Different Icons">
        <x-preview language="blade" :contents="$differentIcons">
            <x-clipboard icon :icons="['copy' => 'pencil', 'copied' => 'check']">
                TallStackUi
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.card')" text="Card" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.dropdown')" text="Dropdown" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
