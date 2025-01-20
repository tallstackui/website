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
    <x-section title="Concept" disable-copy>
        <p>
            TallStackUI offers a very complete configuration file that allows you to control several
            things related to the behavior of TallStackUI in general. Run the following command to publish
            the configuration file:
        </p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
</x-layout>
