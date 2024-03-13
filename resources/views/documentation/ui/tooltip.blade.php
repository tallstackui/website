@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="tooltip" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tooltip text="TallStackUI" />
        </x-preview>
    </x-section>
    <x-section title="Available Positions">
        <x-slot:description>
            You can use all the <a href="https://atomiks.github.io/tippyjs/v6/all-props/#placement" class="underline" target="_blank">tippy.js available placements.</a>
        </x-slot:description>
        <x-preview language="blade" :contents="$positions">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top"/>
                <x-tooltip text="Bottom" position="bottom"/>
                <x-tooltip text="Left" position="left"/>
                <x-tooltip text="Right" position="right"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Customized Icon">
        <x-preview language="blade" :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top" icon="exclamation-circle"/>
                <x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle"/>
                <x-tooltip text="Left" position="left" icon="shield-exclamation"/>
                <x-tooltip text="Right" position="right" icon="shield-check"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-tooltip text="XS" xs/>
                <x-tooltip text="SM" sm/>
                <x-tooltip text="MD" md/>
                <x-tooltip text="LG" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="HTML Content">
        <x-preview language="blade" :contents="$html">
            <div class="inline-flex space-x-2">
                <x-tooltip>
                    <b>Tall</b><i>Stack</i><u>Ui</u>
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
                <x-tooltip text="black" color="black" />
                <x-tooltip text="white" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Variations" disable-copy>
        <p>The concept of variation follows the same patterns as <a href="{{ route('documentation.ui.icon').'#variations' }}" class="underline">icon variations.</a></p>
    </x-section>
</x-layout>
