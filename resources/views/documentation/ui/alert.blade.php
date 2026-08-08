@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="alert">
    <x-slot:title>
        Alert
    </x-slot:title>
    <x-slot:description>
        Alert components.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Alert" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-alert>
                TallStackUI
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Title">
        <x-preview language="blade" :contents="$title">
            <x-alert title="TallStackUI">
                TallStackUI
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Close Option" description="An option to allow the user to hide the alert">
        <x-preview language="blade" :contents="$close">
            <x-alert title="TallStackUI" close>
                TallStackUI
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Auto Dismiss" description="An option to automatically dismiss the alert after a given number of seconds">
        <x-preview language="blade" :contents="$dismiss">
            <div class="space-y-2">
                <x-alert :dismiss="3">
                    TallStackUI
                </x-alert>
                <x-alert :dismiss="5" close>
                    TallStackUI
                </x-alert>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icon">
            <div class="space-y-2">
                <x-alert icon="cog">
                    TallStackUI
                </x-alert>
                <x-alert title="TallStackUI" icon="cog">
                    TallStackUI
                </x-alert>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$footer">
            <div class="space-y-2">
                <x-alert>
                    TallStackUI
                    <x-slot:footer>
                        <div class="flex justify-end">
                            <x-badge text="TallStackUI" />
                        </div>
                    </x-slot:footer>
                </x-alert>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-alert title="TallStackUI" text="Primary" />
                <x-alert title="TallStackUI" text="Secondary" color="secondary" />
                <x-alert title="TallStackUI" text="Slate" color="slate" />
                <x-alert title="TallStackUI" text="Gray" color="gray" />
                <x-alert title="TallStackUI" text="Zinc" color="zinc" />
                <x-alert title="TallStackUI" text="Neutral" color="neutral" />
                <x-alert title="TallStackUI" text="Stone" color="stone" />
                <x-alert title="TallStackUI" text="Red" color="red" />
                <x-alert title="TallStackUI" text="Orange" color="orange" />
                <x-alert title="TallStackUI" text="Amber" color="amber" />
                <x-alert title="TallStackUI" text="Yellow" color="yellow" />
                <x-alert title="TallStackUI" text="Lime" color="lime" />
                <x-alert title="TallStackUI" text="Green" color="green" />
                <x-alert title="TallStackUI" text="Emerald" color="emerald" />
                <x-alert title="TallStackUI" text="Teal" color="teal" />
                <x-alert title="TallStackUI" text="Cyan" color="cyan" />
                <x-alert title="TallStackUI" text="Sky" color="sky" />
                <x-alert title="TallStackUI" text="Blue" color="blue" />
                <x-alert title="TallStackUI" text="Indigo" color="indigo" />
                <x-alert title="TallStackUI" text="Violet" color="violet" />
                <x-alert title="TallStackUI" text="Purple" color="purple" />
                <x-alert title="TallStackUI" text="Fuchsia" color="fuchsia" />
                <x-alert title="TallStackUI" text="Pink" color="pink" />
                <x-alert title="TallStackUI" text="Rose" color="rose" />
                <x-alert title="TallStackUI" text="Mauve" color="mauve" />
                <x-alert title="TallStackUI" text="Olive" color="olive" />
                <x-alert title="TallStackUI" text="Mist" color="mist" />
                <x-alert title="TallStackUI" text="Taupe" color="taupe" />
                <x-alert title="TallStackUI" text="Black" color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations">
        <x-preview language="blade" :contents="$lights">
            <div class="space-y-2">
                <x-alert title="TallStackUI" text="Primary" light />
                <x-alert title="TallStackUI" text="Secondary" color="secondary" light />
                <x-alert title="TallStackUI" text="Slate" color="slate" light />
                <x-alert title="TallStackUI" text="Gray" color="gray" light />
                <x-alert title="TallStackUI" text="Zinc" color="zinc" light />
                <x-alert title="TallStackUI" text="Neutral" color="neutral" light />
                <x-alert title="TallStackUI" text="Stone" color="stone" light />
                <x-alert title="TallStackUI" text="Red" color="red" light />
                <x-alert title="TallStackUI" text="Orange" color="orange" light />
                <x-alert title="TallStackUI" text="Amber" color="amber" light />
                <x-alert title="TallStackUI" text="Yellow" color="yellow" light />
                <x-alert title="TallStackUI" text="Lime" color="lime" light />
                <x-alert title="TallStackUI" text="Green" color="green" light />
                <x-alert title="TallStackUI" text="Emerald" color="emerald" light />
                <x-alert title="TallStackUI" text="Teal" color="teal" light />
                <x-alert title="TallStackUI" text="Cyan" color="cyan" light />
                <x-alert title="TallStackUI" text="Sky" color="sky" light />
                <x-alert title="TallStackUI" text="Blue" color="blue" light />
                <x-alert title="TallStackUI" text="Indigo" color="indigo" light />
                <x-alert title="TallStackUI" text="Violet" color="violet" light />
                <x-alert title="TallStackUI" text="Purple" color="purple" light />
                <x-alert title="TallStackUI" text="Fuchsia" color="fuchsia" light />
                <x-alert title="TallStackUI" text="Pink" color="pink" light />
                <x-alert title="TallStackUI" text="Rose" color="rose" light />
                <x-alert title="TallStackUI" text="Mauve" color="mauve" light />
                <x-alert title="TallStackUI" text="Olive" color="olive" light />
                <x-alert title="TallStackUI" text="Mist" color="mist" light />
                <x-alert title="TallStackUI" text="Taupe" color="taupe" light />
                <x-alert title="TallStackUI" text="Black" color="black" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations">
        <x-preview language="blade" :contents="$outlines">
            <div class="space-y-2">
                <x-alert title="TallStackUI" text="Primary" outline />
                <x-alert title="TallStackUI" text="Secondary" color="secondary" outline />
                <x-alert title="TallStackUI" text="Slate" color="slate" outline />
                <x-alert title="TallStackUI" text="Gray" color="gray" outline />
                <x-alert title="TallStackUI" text="Zinc" color="zinc" outline />
                <x-alert title="TallStackUI" text="Neutral" color="neutral" outline />
                <x-alert title="TallStackUI" text="Stone" color="stone" outline />
                <x-alert title="TallStackUI" text="Red" color="red" outline />
                <x-alert title="TallStackUI" text="Orange" color="orange" outline />
                <x-alert title="TallStackUI" text="Amber" color="amber" outline />
                <x-alert title="TallStackUI" text="Yellow" color="yellow" outline />
                <x-alert title="TallStackUI" text="Lime" color="lime" outline />
                <x-alert title="TallStackUI" text="Green" color="green" outline />
                <x-alert title="TallStackUI" text="Emerald" color="emerald" outline />
                <x-alert title="TallStackUI" text="Teal" color="teal" outline />
                <x-alert title="TallStackUI" text="Cyan" color="cyan" outline />
                <x-alert title="TallStackUI" text="Sky" color="sky" outline />
                <x-alert title="TallStackUI" text="Blue" color="blue" outline />
                <x-alert title="TallStackUI" text="Indigo" color="indigo" outline />
                <x-alert title="TallStackUI" text="Violet" color="violet" outline />
                <x-alert title="TallStackUI" text="Purple" color="purple" outline />
                <x-alert title="TallStackUI" text="Fuchsia" color="fuchsia" outline />
                <x-alert title="TallStackUI" text="Pink" color="pink" outline />
                <x-alert title="TallStackUI" text="Rose" color="rose" outline />
                <x-alert title="TallStackUI" text="Mauve" color="mauve" outline />
                <x-alert title="TallStackUI" text="Olive" color="olive" outline />
                <x-alert title="TallStackUI" text="Mist" color="mist" outline />
                <x-alert title="TallStackUI" text="Taupe" color="taupe" outline />
                <x-alert title="TallStackUI" text="Black" color="black" outline />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Rounded Sizes">
        <x-preview language="blade" :contents="$rounded">
            <div class="space-y-2">
                <x-alert title="TallStackUI" text="No rounded corners." square />
                <x-alert title="TallStackUI" text="Extra small" rounded="xs" />
                <x-alert title="TallStackUI" text="Small"       rounded="sm" />
                <x-alert title="TallStackUI" text="Medium"      rounded="md" />
                <x-alert title="TallStackUI" text="Large"       rounded="lg" />
                <x-alert title="TallStackUI" text="Extra large" rounded="xl" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Shadowless" description="An option to remove the shadow when using light variation.">
        <x-preview language="blade" :contents="$shadowless">
            <div class="space-y-2">
                <x-alert title="TallStackUI" text="Light, with the shadow it ships with" light />
                <x-alert title="TallStackUI" text="Light, flat" light shadowless />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Side Border">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$bordered">
                <div class="space-y-2">
                    <x-alert title="TallStackUI" text="Inherits the red color"   color="red"   light bordered="left" />
                    <x-alert title="TallStackUI" text="Inherits the green color" color="green" light bordered="right" />
                    <x-alert title="TallStackUI" text="Explicit blue border"     color="primary" light bordered="left:blue" />
                    <x-alert title="TallStackUI" text="Explicit rose border"     color="primary" light bordered="right:rose" />
                    <x-alert title="TallStackUI" text="Outline + side border"    color="primary" outline bordered="left:amber" />
                    <x-alert title="TallStackUI" text="Square + side border"     color="primary" light square bordered="left:violet" />
                </div>
            </x-preview>
            <p>
                Use <x-block>"left"</x-block> or <x-block>"right"</x-block> to inherit the alert's <x-block>color</x-block>,
                or <x-block>"&lt;side&gt;:&lt;color&gt;"</x-block> (e.g., <x-block>"left:red"</x-block>) to pin an explicit
                color independent from the rest of the alert. All 28 colors are supported.
            </p>
        </div>
    </x-section>
</x-layout>
