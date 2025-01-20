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
            You have the freedom to customize various texts that are used internally in TallStackUI components.
            While some texts can also be customized as placeholders in their respective components, the general
            defaults are tied to translation files. Run the following command to publish the translation files:
        </p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Missing Content" disable-copy>
        <p>Didn't find the translation file for your language? <a href="https://github.com/tallstackui/tallstackui" class="underline" target="_blank">Collaborate sending us a pull request!</a></p>
    </x-section>
</x-layout>
