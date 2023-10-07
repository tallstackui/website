<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip components to show contextual information.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        description="Tooltips are triggered when hovering over an element."
                        language="blade"
                        :contents="$test">
            <div class="inline-flex space-x-2">
                <x-tooltip text="Top" position="top" />
                <x-tooltip text="Bottom" position="bottom" />
                <x-tooltip text="Left" position="left" />
                <x-tooltip text="Right" position="right" />
            </div>
        </x-code-preview>
    </x-section>
</x-layout>
