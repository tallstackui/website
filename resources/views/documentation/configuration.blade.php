@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Configurations</x-slot>
    <x-slot:description>
        TallStackUI configurations.
    </x-slot>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI offers a very complete configuration file that
                allows you to control many things related to the behavior of
                TallStackUI in general. Run the following command to publish the
                configuration file so you can get to know it and configure it
                according to your needs:
            </p>
            <x-code language="shell" :contents="$command" />
            <p>
                The configuration file will be published to
                <x-block>config/tallstackui.php</x-block>
                . You need to keep in mind that your configuration file might be
                outdated after upgrading TallStackUI to a most recent version,
                so it is always important to check if there were updates in the
                configuration file to synchronize the changes with your
                published file.
            </p>
        </div>
    </x-section>
    <x-section title="Configuration File Structure" disable-copy>
        <div class="space-y-4">
            <p>
                The configuration file has a significantly large structure for
                configuring all aspects of TallStackUI in relation to the
                various available features. It presents a flat array of
                components, where each component is mapped to its class, and
                some components include arrays of embedded settings for
                per-component configuration (such as z-index, blur, overflow,
                and other default values). This approach offers granular control
                over the behavior of each component directly from the
                configuration file.
            </p>
            <p>
                Below is the full configuration file structure with all
                available options and their descriptions. This is not a copy:
                the block is the actual file shipped by the
                <x-block>tallstackui/tallstackui</x-block>
                release this documentation runs on the current version you're
                viewing.
            </p>
            <x-code
                language="php"
                :contents="tallstackui_configuration()"
                disable-copy
            />
        </div>
    </x-section>
</x-layout>
