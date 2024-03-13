@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Configurations
    </x-slot:title>
    <x-slot:description>
        TallStackUI configurations.
    </x-slot:description>
    <x-section title="Configuration File" disable-copy>
        <p>
            TallStackUI offers a configuration file that allows you to control several things, in addition to
            listing all available components for possible personalization, something we will talk about later.
            Use this file to configure some things about certain components.
        </p>
        <p class="mt-4">1. Run the following command to publish the configuration file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
    <x-section title="Content" disable-copy>
        <div class="inline-flex items-center gap-1">
            <p>
                This will be a part of the file content
                <x-outdated-contente-tooltip />
            </p>
        </div>
        <x-code :contents="$content" disable-copy/>
    </x-section>
</x-layout>
