@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Translations
    </x-slot:title>
    <x-slot:description>
        TallStackUI translations.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                You have the freedom to customize various texts that are used internally in TallStackUI components.
                While some texts can also be customized as placeholders in their respective components - such as:
                <x-block>table</x-block> and <x-block>select.styled</x-block> components, the general defaults are tied to translation files.
                Run the following command to publish the translation files:
            </p>
            <x-code language="shell" :contents="$command"/>
            <p>
                The translation files will be published to <x-block>lang/vendor/tallstack-ui</x-block>.
            </p>
        </div>
    </x-section>
    <x-section title="Missing Content" disable-copy>
        Didn't find the translation file for your language?
        <a href="https://github.com/tallstackui/tallstackui" class="underline" target="_blank">Collaborate sending us a pull request adding your language!</a>
    </x-section>
</x-layout>
