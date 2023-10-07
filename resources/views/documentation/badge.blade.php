<x-layout>
    <x-slot:title>
        Badge
    </x-slot:title>
    <x-slot:description>
        Badge component.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <x-badge text="TallStackUi" />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Square Variation"
                        language="blade"
                        :contents="$square">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" square />
            </div>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Icon Slot"
                        language="blade"
                        :contents="$icons">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" icon="users" position="left" />
                <x-badge text="TallStackUi" icon="cog" position="right" />
            </div>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Size Variations"
                        language="blade"
                        :contents="$sizes">
            <div class="flex items-center gap-2">
                <x-badge text="Default" />
                <x-badge text="MD" md />
                <x-badge text="LG" lg />
            </div>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Color Variations"
                        description="You can use any color from the TailwindCSS palette."
                        language="blade"
                        :contents="$colors">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" color="orange" />
                <x-badge text="TallStackUi" color="pink" />
                <x-badge text="TallStackUi" color="sky" />
            </div>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Outline Variations"
                        language="blade"
                        :contents="$outlines">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" color="orange" outline />
                <x-badge text="TallStackUi" color="pink" outline />
                <x-badge text="TallStackUi" color="sky" outline />
            </div>
        </x-code-preview>
    </x-section>
</x-layout>
