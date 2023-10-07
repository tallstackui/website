<x-layout>
    <x-slot:title>
        Badge
    </x-slot:title>
    <x-slot:description>
        Badge component.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-badge text="TallStackUi"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Square Variation"
                   language="blade"
                   :contents="$square">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" square/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   language="blade"
                   :contents="$icons">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" icon="users" position="left"/>
                <x-badge text="TallStackUi" icon="cog" position="right"/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="flex items-center gap-2">
                <x-badge text="Default"/>
                <x-badge text="MD" md/>
                <x-badge text="LG" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="gap-2">
                <x-badge text="TallStackUi" color="primary" />
                <x-badge text="TallStackUi" color="secondary" />
                <x-badge text="TallStackUi" color="white" />
                <x-badge text="TallStackUi" color="black" />
                <x-badge text="TallStackUi" color="slate" />
                <x-badge text="TallStackUi" color="gray" />
                <x-badge text="TallStackUi" color="zinc" />
                <x-badge text="TallStackUi" color="neutral" />
                <x-badge text="TallStackUi" color="stone" />
                <x-badge text="TallStackUi" color="red" />
                <x-badge text="TallStackUi" color="orange" />
                <x-badge text="TallStackUi" color="amber" />
                <x-badge text="TallStackUi" color="yellow" />
                <x-badge text="TallStackUi" color="lime" />
                <x-badge text="TallStackUi" color="green" />
                <x-badge text="TallStackUi" color="emerald" />
                <x-badge text="TallStackUi" color="teal" />
                <x-badge text="TallStackUi" color="cyan" />
                <x-badge text="TallStackUi" color="sky" />
                <x-badge text="TallStackUi" color="blue" />
                <x-badge text="TallStackUi" color="indigo" />
                <x-badge text="TallStackUi" color="violet" />
                <x-badge text="TallStackUi" color="purple" />
                <x-badge text="TallStackUi" color="fuchsia" />
                <x-badge text="TallStackUi" color="pink" />
                <x-badge text="TallStackUi" color="rose" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outlines">
            <div class="gap-2">
                <x-badge text="TallStackUi" outline />
                <x-badge text="TallStackUi" color="secondary" outline />
                <x-badge text="TallStackUi" color="white" outline />
                <x-badge text="TallStackUi" color="black" outline />
                <x-badge text="TallStackUi" color="slate" outline />
                <x-badge text="TallStackUi" color="gray" outline />
                <x-badge text="TallStackUi" color="zinc" outline />
                <x-badge text="TallStackUi" color="neutral" outline />
                <x-badge text="TallStackUi" color="stone" outline />
                <x-badge text="TallStackUi" color="red" outline />
                <x-badge text="TallStackUi" color="orange" outline />
                <x-badge text="TallStackUi" color="amber" outline />
                <x-badge text="TallStackUi" color="yellow" outline />
                <x-badge text="TallStackUi" color="lime" outline />
                <x-badge text="TallStackUi" color="green" outline />
                <x-badge text="TallStackUi" color="emerald" outline />
                <x-badge text="TallStackUi" color="teal" outline />
                <x-badge text="TallStackUi" color="cyan" outline />
                <x-badge text="TallStackUi" color="sky" outline />
                <x-badge text="TallStackUi" color="blue" outline />
                <x-badge text="TallStackUi" color="indigo" outline />
                <x-badge text="TallStackUi" color="violet" outline />
                <x-badge text="TallStackUi" color="purple" outline />
                <x-badge text="TallStackUi" color="fuchsia" outline />
                <x-badge text="TallStackUi" color="pink" outline />
                <x-badge text="TallStackUi" color="rose" outline />
            </div>
        </x-preview>
    </x-section>
</x-layout>
