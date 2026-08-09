@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="qr-code">
    <x-slot:title>QrCode</x-slot>
    <x-slot:description>QrCode component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="QrCode" />
    </x-slot>
    <x-section title="Concept" disable-copy>
        A dependency-free QR code rendered as inline SVG. The whole of ISO/IEC
        18004 lives in the package: nothing is fetched and no encoding library
        is involved. AlpineJS is attached only when the code offers copy or
        download.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-qr-code link="https://tallstackui.com" />
        </x-preview>
    </x-section>
    <x-section
        title="Colors"
        new
        description="Without color the modules follow the theme, which inverts the symbol in dark mode. Pass an explicit color where reader conformance matters."
    >
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-wrap items-center gap-4">
                <x-qr-code link="https://tallstackui.com" />
                <x-qr-code link="https://tallstackui.com" color="blue" />
                <x-qr-code link="https://tallstackui.com" color="emerald" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Size Variations"
        new
        description="size sets only the rendered box. The module count comes from the payload."
    >
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-wrap items-end gap-4">
                <x-qr-code link="https://tallstackui.com" size="xs" />
                <x-qr-code link="https://tallstackui.com" size="sm" />
                <x-qr-code link="https://tallstackui.com" size="md" />
                <x-qr-code link="https://tallstackui.com" size="lg" />
                <x-qr-code link="https://tallstackui.com" size="xl" />
                <x-qr-code link="https://tallstackui.com" size="2xl" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Watermark"
        new
        description="The modules underneath are removed rather than covered, and the error correction level rises to H on its own."
    >
        <x-preview language="blade" :contents="$watermark">
            <div class="flex flex-wrap items-center gap-4">
                <x-qr-code
                    link="https://tallstackui.com"
                    watermark="bolt"
                    size="lg"
                />
                <x-qr-code
                    link="https://tallstackui.com"
                    watermark="TALL"
                    size="lg"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Copy & Download"
        new
        description="Copy always writes a PNG. Download takes png or svg. The export carries no background, so the PNG is transparent."
    >
        <x-preview language="blade" :contents="$actions">
            <div class="flex flex-wrap items-start gap-4">
                <x-qr-code link="https://tallstackui.com" copy />
                <x-qr-code link="https://tallstackui.com" download />
                <x-qr-code link="https://tallstackui.com" download="svg" />
                <x-qr-code link="https://tallstackui.com" copy download="svg" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Skeleton"
        new
        description="An option to display a lazy loading skeleton indicator."
    >
        <x-preview language="blade" :contents="$skeleton">
            <x-qr-code skeleton size="lg" />
        </x-preview>
    </x-section>
    <x-section
        title="Configuration"
        new
        description="size is only consulted when the attribute is absent. pixels is the width of the exported image and has no effect on the page."
    >
        <x-code language="php" :contents="$configuration" />
    </x-section>
    <x-section
        title="Scannability"
        new
        description="Pixels per module at one times. Below roughly three the code stops being readable from a 1x display. A retina display doubles every number."
    >
        <x-table
            :headers="[
                ['index' => 'payload', 'label' => 'Payload'],
                ['index' => 'version', 'label' => 'Version'],
                ['index' => 'xs', 'label' => 'xs'],
                ['index' => 'sm', 'label' => 'sm'],
                ['index' => 'md', 'label' => 'md'],
                ['index' => 'lg', 'label' => 'lg'],
                ['index' => 'xl', 'label' => 'xl'],
                ['index' => '2xl', 'label' => '2xl'],
            ]"
            :rows="[
                ['payload' => '23 B', 'version' => 'v2', 'xs' => '2.91', 'sm' => '3.88', 'md' => '4.85', 'lg' => '5.82', 'xl' => '6.79', '2xl' => '7.76'],
                ['payload' => '120 B', 'version' => 'v7', 'xs' => '1.81', 'sm' => '2.42', 'md' => '3.02', 'lg' => '3.62', 'xl' => '4.23', '2xl' => '4.83'],
                ['payload' => '330 B', 'version' => 'v13', 'xs' => '1.25', 'sm' => '1.66', 'md' => '2.08', 'lg' => '2.49', 'xl' => '2.91', '2xl' => '3.32'],
                ['payload' => '800 B', 'version' => 'v23', 'xs' => '0.82', 'sm' => '1.09', 'md' => '1.37', 'lg' => '1.64', 'xl' => '1.91', '2xl' => '2.19'],
            ]"
        />
    </x-section>
</x-layout>
