@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Stats
        <x-slot:version>
            1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Stats components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="stats" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" :background="false">
            <div class="grid grid-cols-3 gap-2">
                <x-stats :number="30" />
                <x-stats :number="50" />
                <x-stats :number="100" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Title">
        <x-preview language="blade" :contents="$title" :background="false">
            <x-stats title="Components" :number="100" />
        </x-preview>
    </x-section>
    <x-section title="Link" description="An option to allow the navigation when clicking on the card.">
        <x-preview language="blade" :contents="$link" :background="false">
            <div class="grid grid-cols-3 gap-2">
                <x-stats href="https://tallstackui.com"
                         target="_blank"
                         title="Components"
                         :number="50" />
                <x-stats href="https://tallstackui.com"
                         target="_blank"
                         title="Users"
                         :number="500" />
                <x-stats href="https://tallstackui.com"
                         target="_blank"
                         title="Downloads"
                         :number="10.000" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icons">
        <x-preview language="blade" :contents="$icons" :background="false">
            <div class="grid grid-cols-3 gap-2">
                <x-stats icon="swatch" :number="100" />
                <x-stats icon="swatch" :number="100" light />
                <x-stats icon="swatch" :number="100" outline />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors" :background="false">
            <div class="space-y-2">
                <x-stats title="Components" icon="swatch" :number="100" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="secondary" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="slate" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="gray" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="zinc" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="neutral" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="stone" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="red" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="orange" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="amber" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="yellow" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="lime" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="green" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="emerald" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="teal" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="cyan" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="sky" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="blue" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="indigo" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="violet" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="purple" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="fuchsia" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="pink" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="rose" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="black" outline />
                <x-stats title="Components" icon="swatch" :number="100" color="white" outline />
            </div>
            <x-warning class="mt-4">
                The color is only applied to the icon and its style.
            </x-warning>
        </x-preview>
    </x-section>
    <x-section title="Indicators">
        <x-preview language="blade" :contents="$symbols" :background="false">
            <div class="grid grid-cols-2 gap-2">
                <x-stats :number="50" increase />
                <x-stats :number="100" decrease />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Animated Effect">
        <x-preview language="blade" :contents="$animated" :background="false">
            <div class="grid grid-cols-4 gap-2">
                <x-stats :number="25" animated />
                <x-stats :number="50" animated />
                <x-stats :number="75" animated />
                <x-stats :number="100" animated />
            </div>
            <x-warning class="mt-4">
                The animation will happen every time the component enters the viewport.
            </x-warning>
        </x-preview>
    </x-section>
    <x-section title="Number Format">
        <x-preview language="blade" :contents="$numberFormat" :background="false">
            <div class="grid grid-cols-4 gap-2">
                <x-stats number="U$ 25,00" />
                <x-stats number="U$ 50,00" />
                <x-stats number="U$ 75,00" />
                <x-stats number="U$ 100,00" />
            </div>
            <x-warning class="mt-4">
                The <b>animated</b> effect doesn't work when using a custom number format.
            </x-warning>
        </x-preview>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$slots" :background="false">
            <x-stats :number="50" header="TallStackUI" footer="The best TALL Stack component library">
                <x-slot:right>
                    <x-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
                </x-slot:right>
            </x-stats>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.slide')" text="Slide" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.step')" text="Step" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
