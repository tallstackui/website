@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Configurations</x-slot:title>
    <x-slot:description>TallStackUI configurations.</x-slot:description>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI offers a very complete configuration file that allows you to control many things related to
                the behavior of TallStackUI in general. Run the following command to publish the configuration file so
                you can get to know it and configure it according to your needs:
            </p>
            <x-code language="shell" :contents="$command" />
            <p>
                The configuration file will be published to <x-block>config/tallstackui.php</x-block>. You need to keep
                in mind that your configuration file might be outdated after upgrading TallStackUI to a most recent
                version, so it is always important to check if there were updates in the configuration file to
                synchronize the changes with your published file.
            </p>
        </div>
    </x-section>
    <x-section title="Configuration File Structure" disable-copy>
        <div class="space-y-4">
            <p>
                Starting from version 3, the configuration file has a significantly different structure compared to
                version 2. It now includes a flat
                <x-block>components</x-block> array where each component is mapped to its class, and some components
                include inline settings arrays for per-component configuration (such as z-index, blur, overflow, and
                other defaults). This approach gives you granular control over individual component behavior directly
                from the configuration file.
            </p>
            <p>Below is the full configuration file structure with all available options and their descriptions:</p>
            <x-code language="php" :contents="$structure" />
        </div>
    </x-section>
    <x-section
        title="Global Keys"
        new
        description="Top-level keys applying across components rather than to a single one. Per-component options live under components.&lt;name&gt; and are documented on each component's page."
    >
        <x-code language="php" :contents="$globalKeys" />
        <x-warning class="mt-4">
            <x-block>floating_scroll_lock</x-block> covers Dropdown and its Submenu, Autocomplete, Color, Date,
            Password, Select Styled, Time, Upload, Calendar and the List Items menu &mdash; every component built on the
            <a href="{{ route('documentation', ['internal', 'floating']) }}" wire:navigate class="underline">floating</a
            >.
        </x-warning>
    </x-section>
    <x-section
        title="How the Published File Is Merged"
        new
        description="Keys the file does not mention keep their default, so a file written against an older release does not lose options added since."
    >
        <div class="space-y-4">
            <p>
                Lists of scalars are the exception: they are taken as published rather than merged entry by entry, which
                is what lets a published list be shorter than the default.
            </p>
            <x-code language="php" :contents="$merge" />
            <x-warning warning title="This was broken before 4.x">
                <x-block>array_replace_recursive</x-block> merges numerically indexed arrays index by index, so a
                published list could only grow or be replaced entry by entry. The
                <x-block>editor.sanitization.allowed_tags</x-block> and <x-block>editor.upload.mimes</x-block> rows are
                the ones that matter: the config presents them as defence in depth, and the whitelist could not be
                tightened. The same now applies to <x-block>table.quantity</x-block>,
                <x-block>editor.toolbar</x-block> and <x-block>debug.environments</x-block>.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Scrollbar Offset"
        new
        description="Every overlay that locks the page gives the scrollbar's width back as padding-right, so the content does not jump sideways. That width is measured now instead of being a hardcoded 15px."
    >
        <div class="space-y-4">
            <p>
                On overlay scrollbars &mdash; the macOS default, and what any Mac on a trackpad is using &mdash; the
                measurement is zero, so nothing is written at all. The lock publishes what it measured, so a full-bleed
                element can grow back over the reserved strip:
            </p>
            <x-code language="css" :contents="$scrollbarCss" />
            <x-warning class="mt-4">
                <x-block>x-layout.header</x-block> and <x-block>x-banner</x-block> already carry the utility. They are
                the only two components that are in flow and full bleed with a background of their own; everything else
                that touches the edge is <x-block>position: fixed</x-block> and never sees the body's padding.
                Applications with a header of their own can add the class to it.
            </x-warning>
        </div>
    </x-section>
</x-layout>
