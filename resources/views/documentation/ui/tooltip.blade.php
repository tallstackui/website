@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="tooltip">
    <x-slot:title>Tooltip</x-slot>
    <x-slot:description>Tooltip component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Tooltip" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tooltip text="TallStackUI" />
        </x-preview>
    </x-section>
    <x-warning success>
        The v4 dropped the dependency of the Tippy.js in order to reduce the
        bundle size.
    </x-warning>
    <x-section class="mt-4" title="Available Positions">
        <x-preview language="blade" :contents="$positions">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top" />
                <x-tooltip text="Bottom" position="bottom" />
                <x-tooltip text="Left" position="left" />
                <x-tooltip text="Right" position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Customized Icon">
        <x-preview language="blade" :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-tooltip
                    text="Top"
                    position="top"
                    icon="exclamation-circle"
                />
                <x-tooltip
                    text="Bottom"
                    position="bottom"
                    icon="exclamation-triangle"
                />
                <x-tooltip
                    text="Left"
                    position="left"
                    icon="shield-exclamation"
                />
                <x-tooltip text="Right" position="right" icon="shield-check" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-tooltip text="XS" xs />
                <x-tooltip text="SM" sm />
                <x-tooltip text="MD" md />
                <x-tooltip text="LG" lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="HTML Content">
        <x-preview language="blade" :contents="$html">
            <div class="inline-flex space-x-2">
                <x-tooltip>
                    <b>Tall</b>
                    <i>Stack</i>
                    <u>Ui</u>
                </x-tooltip>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="gap-2 space-y-2">
                <x-tooltip text="primary" />
                <x-tooltip text="secondary" color="secondary" />
                <x-tooltip text="slate" color="slate" />
                <x-tooltip text="gray" color="gray" />
                <x-tooltip text="zinc" color="zinc" />
                <x-tooltip text="neutral" color="neutral" />
                <x-tooltip text="stone" color="stone" />
                <x-tooltip text="red" color="red" />
                <x-tooltip text="orange" color="orange" />
                <x-tooltip text="amber" color="amber" />
                <x-tooltip text="yellow" color="yellow" />
                <x-tooltip text="lime" color="lime" />
                <x-tooltip text="green" color="green" />
                <x-tooltip text="emerald" color="emerald" />
                <x-tooltip text="teal" color="teal" />
                <x-tooltip text="cyan" color="cyan" />
                <x-tooltip text="sky" color="sky" />
                <x-tooltip text="blue" color="blue" />
                <x-tooltip text="indigo" color="indigo" />
                <x-tooltip text="violet" color="violet" />
                <x-tooltip text="purple" color="purple" />
                <x-tooltip text="fuchsia" color="fuchsia" />
                <x-tooltip text="pink" color="pink" />
                <x-tooltip text="rose" color="rose" />
                <x-tooltip text="mauve" color="mauve" />
                <x-tooltip text="olive" color="olive" />
                <x-tooltip text="mist" color="mist" />
                <x-tooltip text="taupe" color="taupe" />
                <x-tooltip text="black" color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Delay"
        new
        description="An option to control the default delay of the tooltip."
    >
        <x-preview language="blade" :contents="$delay">
            <div class="inline-flex space-x-4">
                <x-tooltip text="slow" delay="slow" />
                <x-tooltip text="fast" delay="fast" />
                <x-tooltip text="faster" delay="faster" />
                <x-tooltip text="flash" delay="flash" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Balloon Color"
        new
        description="An option to change the color of the tooltip Balloon"
    >
        <x-preview language="blade" :contents="$balloon">
            <div class="inline-flex space-x-4">
                <x-tooltip text="red" balloon="red" />
                <x-tooltip text="emerald" balloon="emerald" />
                <x-tooltip text="amber" balloon="amber" />
                <x-tooltip text="black" balloon="black" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            A colored balloon keeps its color in both themes, and so does the
            default one. You can ppt into a light balloon on a dark theme
            through the
            <x-block>invert</x-block>
            setting in the
            <x-refer doc="configuration">configuration file.</x-refer>
        </x-warning>
    </x-section>
    <x-section title="Balloon Scale" new>
        <x-preview language="blade" :contents="$scale">
            <div class="inline-flex space-x-4">
                <x-tooltip
                    text="A hint holding a whole sentence reads cramped at text-xs."
                    scale="sm"
                />
                <x-tooltip
                    text="A hint holding a whole sentence reads cramped at text-xs."
                    scale="md"
                />
                <x-tooltip
                    text="A hint holding a whole sentence reads cramped at text-xs."
                    scale="lg"
                />
            </div>
        </x-preview>
        <x-table
            class="mt-4"
            :headers="[
                ['index' => 'name', 'label' => 'Name'],
                ['index' => 'type', 'label' => 'Type scale'],
                ['index' => 'width', 'label' => 'Max width'],
            ]"
            :rows="[
                ['name' => 'sm', 'type' => 'text-xs', 'width' => '20rem'],
                ['name' => 'md', 'type' => 'text-sm', 'width' => '24rem'],
                ['name' => 'lg', 'type' => 'text-base', 'width' => '28rem'],
            ]"
        />
        <p class="mt-4">
            The balloon wraps at that maximum and then shrinks to its widest
            line, so a two-line hint does not sit in a box with empty space on
            its right.
        </p>
    </x-section>
    <x-section title="Disabled" new>
        <x-preview language="blade" :contents="$disabled">
            <div
                x-data="{ disabled: false }"
                class="flex items-center gap-4"
            >
                <x-toggle x-model="disabled" label="Disable the tooltip" />
                <span
                    class="cursor-help underline"
                    x-data
                    x-tooltip="TallStackUI"
                    x-bind:data-tooltip-disabled="disabled"
                >
                    Hover me
                </span>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Styling the Balloon"
        new
        description="The balloon is created by JavaScript and shared by anchors that have no component behind them."
    >
        <x-code language="css" :contents="$styling" />
    </x-section>
</x-layout>
