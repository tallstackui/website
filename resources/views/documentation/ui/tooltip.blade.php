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
    <x-section title="Available Positions">
        <x-slot:description>
            Fifteen Popper-style placements. The balloon flips to the opposite
            side when the requested one does not fit, and shifts along the cross
            axis to stay inside the viewport.
        </x-slot>
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
        description="Four named steps, because a number in a Blade attribute invites values nobody wants. It applies to the pointer only: keyboard focus and taps open immediately."
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
        description="color paints the icon; balloon paints the balloon. The directive holds no color map: it writes --tsui-tooltip-bg, so any palette added to @theme works with no list to keep in sync."
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
            default one. Opt into a light balloon on a dark theme through the
            <x-block>invert</x-block>
            setting.
        </x-warning>
    </x-section>
    <x-section
        title="Balloon Scale"
        new
        description="balloon colors the balloon; scale sizes it. Each step grows the padding and keeps its viewport guard, so a long text still wraps instead of running off a narrow phone."
    >
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
    </x-section>
    <x-section
        title="Disabled"
        new
        description="Turns a tooltip off without removing the directive. The flag is watched, not only read when the balloon opens."
    >
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
        title="Global Settings"
        new
        description="They reach every x-tooltip on the page, including the ones rendered by Button, Kbd, Breadcrumbs, Editor and the sidebar. delay, color and size are defaults: the inline prop always wins."
    >
        <x-code language="php" :contents="$settings" />
        <x-warning class="mt-4">
            <x-block>invert</x-block>
            flips the default balloon in dark mode. It is off unasked, so the
            balloon keeps its dark look in both themes. A colored balloon never
            inverts, whatever the setting says.
        </x-warning>
    </x-section>
    <x-section
        title="Styling the Balloon"
        new
        description="The balloon is created by JavaScript and shared by anchors that have no component behind them, so it cannot go through customize()."
    >
        <x-code language="css" :contents="$styling" />
    </x-section>
    <x-section title="Variations" disable-copy>
        <p>
            The concept of variation follows the same patterns as
            <a
                href="{{ route("documentation", ["ui", "icon"]) . "#variations" }}"
                wire:navigate
                class="underline"
            >
                icon variations.
            </a>
        </p>
    </x-section>
</x-layout>
