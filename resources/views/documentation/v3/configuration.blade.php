@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Configurations
    </x-slot:title>
    <x-slot:description>
        TallStackUI configurations.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI offers a very complete configuration file that allows you to control many things
                related to the behavior of TallStackUI in general. Run the following command to publish the
                configuration file so you can get to know it and configure it according to your needs:
            </p>
            <x-code language="shell" :contents="$command"/>
            <p>
                The configuration file will be published to <x-block>config/tallstackui.php</x-block>. You need to keep in mind that your configuration file might be outdated after upgrading TallStackUI to a most recent version,
                so it is always important to check if there were updates in the configuration file to synchronize the changes with your published file.
            </p>
        </div>
    </x-section>
</x-layout>
