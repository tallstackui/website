<x-layout>
    <x-slot:title>
        Configurations
    </x-slot:title>
    <x-slot:description>
        TallStackUi available configurations.
    </x-slot:description>
    <x-section title="Configuration File">
        <p class="text-justify">
            TallStackUi offers a configuration file that allows you to control several things, in addition to
            listing all available components for possible personalizations, something we will talk about later.
            Use this file to configure some things about certain components.
        </p>
        <p class="mt-4">1. Run the following command to publish the configuration file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Content">
        <div class="inline-flex items-center gap-1">
            <p>
                This will be a part of the file content
                <x-outdated-contente-tooltip />
            </p>
        </div>
        <x-code :contents="$content" :copy="false"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.internal.wrapper') }}" text="Internal Wrapper" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.translation') }}" text="Translations" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
