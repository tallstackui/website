@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="clipboard">
    <x-slot:title>Clipboard</x-slot:title>
    <x-slot:description>Clipboard component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Clipboard" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-clipboard> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Button at Left">
        <x-preview language="blade" :contents="$left">
            <x-clipboard left> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-clipboard label="Library" hint="Copy the name of the library"> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Secret Content" description="An option to transform the input in a password type.">
        <x-preview language="blade" :contents="$secret">
            <x-clipboard label="Library" hint="Copy the name of the library" secret> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-clipboard x-on:copy="alert(`Copied: ${$event.detail.text}`)"> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Icon Style">
        <x-preview language="blade" :contents="$icon">
            <x-clipboard icon> TallStackUI </x-clipboard>
        </x-preview>
        <x-warning class="mt-4"> The icon style does not support label and hint. </x-warning>
    </x-section>
    <x-section title="Using Different Icons">
        <x-preview language="blade" :contents="$differentIcons">
            <x-clipboard icon :icons="['copy' => 'pencil', 'copied' => 'check']"> TallStackUI </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Copying Programmatically" description="An option to copy text using a JavaScript API.">
        <x-preview language="blade" :contents="$programmatic">
            <x-button x-on:click="$tsui.copy('TallStackUI')"> Copy </x-button>
        </x-preview>
        <div class="mt-4">
            <x-code language="javascript" :contents="$programmaticEvent" />
        </div>
        <x-warning warning title="Both paths require a user gesture" class="mt-4">
            The write goes through <x-block>navigator.clipboard.writeText()</x-block>, with
            <x-block>execCommand</x-block> underneath as a fallback for the setups that are not a secure context &mdash;
            an application served over <x-block>http://myapp.test</x-block> by Valet or Herd, or reached at an IP from a
            phone on the same network. A browser only allows a clipboard write while a real interaction is being
            handled, so calling it from a timer or after an API response fails in every browser, and always did.
        </x-warning>
    </x-section>
</x-layout>
