<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip components to show contextual information when hovering over an element.
    </x-slot:description>
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
                <x-tooltip text="SM" position="top" sm/>
                <x-tooltip text="MD" position="bottom" md/>
                <x-tooltip text="LG" position="left" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   description="You can use any color from the TailwindCSS palette."
                   language="blade"
                   :contents="$colors">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Primary" position="top" color="primary"/>
                <x-tooltip text="Secondary" position="bottom" color="secondary"/>
                <x-tooltip text="Sky" position="left" color="sky"/>
                <x-tooltip text="Orange" position="right" color="orange"/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outlines">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Primary" position="top" color="primary" outline/>
                <x-tooltip text="Secondary" position="bottom" color="secondary" outline/>
                <x-tooltip text="Sky" position="left" color="sky" outline/>
                <x-tooltip text="Orange" position="right" color="orange" outline/>
            </div>
        </x-preview>
    </x-section>
</x-layout>
