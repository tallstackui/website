<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip components to show contextual information when hovering over an element.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="tooltip" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top"/>
                <x-tooltip text="Bottom" position="bottom"/>
                <x-tooltip text="Left" position="left"/>
                <x-tooltip text="Right" position="right"/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Customizing Icon"
                   language="blade"
                   :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top" icon="exclamation-circle"/>
                <x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle"/>
                <x-tooltip text="Left" position="left" icon="shield-exclamation"/>
                <x-tooltip text="Right" position="right" icon="shield-check"/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-tooltip text="SM" sm/>
                <x-tooltip text="MD" md/>
                <x-tooltip text="LG" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
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
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outlines">
            <div class="gap-2 space-y-2">
                <x-tooltip text="primary" outline />
                <x-tooltip text="secondary" color="secondary" outline />
                <x-tooltip text="slate" color="slate" outline />
                <x-tooltip text="gray" color="gray" outline />
                <x-tooltip text="zinc" color="zinc" outline />
                <x-tooltip text="neutral" color="neutral" outline />
                <x-tooltip text="stone" color="stone" outline />
                <x-tooltip text="red" color="red" outline />
                <x-tooltip text="orange" color="orange" outline />
                <x-tooltip text="amber" color="amber" outline />
                <x-tooltip text="yellow" color="yellow" outline />
                <x-tooltip text="lime" color="lime" outline />
                <x-tooltip text="green" color="green" outline />
                <x-tooltip text="emerald" color="emerald" outline />
                <x-tooltip text="teal" color="teal" outline />
                <x-tooltip text="cyan" color="cyan" outline />
                <x-tooltip text="sky" color="sky" outline />
                <x-tooltip text="blue" color="blue" outline />
                <x-tooltip text="indigo" color="indigo" outline />
                <x-tooltip text="violet" color="violet" outline />
                <x-tooltip text="purple" color="purple" outline />
                <x-tooltip text="fuchsia" color="fuchsia" outline />
                <x-tooltip text="pink" color="pink" outline />
                <x-tooltip text="rose" color="rose" outline />
                <x-tooltip text="black" color="black" outline />
                <x-tooltip text="white" color="white" outline />
            </div>
        </x-preview>
    </x-section>
</x-layout>
