<x-layout>
    <x-slot:title>
        Translations
    </x-slot:title>
    <x-slot:description>
        TallStackUI translations.
    </x-slot:description>
    <x-section title="Configuration File">
        <p class="text-justify">
            You are free to customize various texts that are in use in TallStackUI components.
        </p>
        <p class="mt-4">1. Run the following command to publish the translations file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Content">
        <p class="text-justify">This command will publish the TallStackUI translation files for the root path of your application, inside the <x-block>lang</x-block> folder.</p>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.configuration') }}" text="Configurations" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.personalization.concept') }}" text="Personalization Concept" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
