<x-layout>
    <x-slot:title>
        Translations
    </x-slot:title>
    <x-slot:description>
        TallStackUI translations.
    </x-slot:description>
    <x-section title="Translation Files" :copy="false">
        <p>
            You are free to customize various texts that are in use in TallStackUI components.
        </p>
        <p class="mt-4">1. Run the following command to publish the translations file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Content" :copy="false">
        <p>This command will publish the TallStackUI translation files for the root path of your application.</p>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.configuration')" text="Configurations" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.personalization.concept')" text="Personalization Concept" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
