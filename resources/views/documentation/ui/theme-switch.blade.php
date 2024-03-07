@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Theme Switch
        <x-slot:version>
            1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Theme switch components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="theme-switch" />
    </x-slot:personalization>
    <x-section title="Concept" anchor="static-concept" disable-copy>
        <p>
            As TallStackUI offers <a href="{{ route('documentation.dark-theme') }}" class="underline">a helper
            to manipulate the dark theme</a>, <u>starting from version 1.20</u>, a simple
            toggle component was introduced with support for manipulating the dark theme state, activating
            or deactivating it with the respective sun and moon icons.
        </p>
        <x-warning class="mt-2">
            You should only use this component if are using the <a href="{{ route('documentation.dark-theme') }}" class="underline">dark theme helper.</a>
        </x-warning>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-theme-switch />
        </x-preview>
    </x-section>
    <x-section title="Sizes">
        <x-preview language="blade" :contents="$sizes">
            <x-theme-switch xs />
            <x-theme-switch sm />
            <x-theme-switch md />
            <x-theme-switch lg />
            <x-theme-switch xl />
        </x-preview>
    </x-section>
    <x-section title="Icons Only" description="An option to only display icons, without the toggle.">
        <x-preview language="blade" :contents="$icons">
            <x-theme-switch icons />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.table')" text="Table" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.tooltip')" text="Tooltip" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
