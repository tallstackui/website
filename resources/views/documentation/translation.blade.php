<x-layout>
    <x-slot:title>
        Translations
    </x-slot:title>
    <x-slot:description>
        TallStackUi available translations.
    </x-slot:description>
    <x-section title="Configuration File">
        <p class="text-justify">
            You are free to customize various texts that are in use in TallStackUi components.
        </p>
        <p class="mt-4">1. Run the following command to publish the translations file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Content">
        <p>This command will publish the TallStackUi translation files for your application, inside the <x-block>lang</x-block> folder.</p>
    </x-section>
</x-layout>
