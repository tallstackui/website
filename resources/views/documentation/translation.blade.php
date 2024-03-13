@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Translations
    </x-slot:title>
    <x-slot:description>
        TallStackUI translations.
    </x-slot:description>
    <x-section title="Translation Files" disable-copy>
        <p>
            You are free to customize various texts that are in use in TallStackUI components.
        </p>
        <p class="mt-4">1. Run the following command to publish the translations file:</p>
        <x-code language="shell" :contents="$command"/>
        <p>This command will publish the TallStackUI translation files for the root path of your application.</p>
    </x-section>
    <x-section title="Missing Content" disable-copy>
        <p>Didn't find the translation file for your language? <a href="https://github.com/tallstackui/tallstackui" class="underline" target="_blank">Collaborate sending us a pull request!</a></p>
    </x-section>
</x-layout>
