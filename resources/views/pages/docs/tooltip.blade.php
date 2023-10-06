<x-layout>
    <x-slot:title>
        Tooltip
    </x-slot:title>
    <x-slot:description>
        Tooltip components to show contextual information.
    </x-slot:description>
    <x-section title="Basic Usage">
        <x-tooltip text="Top" position="top" />
        <x-tooltip text="Bottom" position="bottom" />
        <x-tooltip text="Left" position="left" />
        <x-tooltip text="Right" position="right" />
<x-code language="blade">
    @verbatim
<x-tooltip text="Top" position="top" />
<x-tooltip text="Bottom" position="bottom" />
<x-tooltip text="Left" position="left" />
<x-tooltip text="Right" position="right" />
    @endverbatim
</x-code>
    </x-section>
    <x-section title="Icons" description="You can customize the icon">
        <x-tooltip text="Top" position="top" icon="exclamation-circle" />
        <x-tooltip text="Bottom" position="bottom" icon="bell" />
        <x-tooltip text="Left" position="left" icon="shield-exclamation" />
        <x-tooltip text="Right" position="right" />
<x-code language="blade">
    @verbatim
<x-tooltip text="Top" position="top" icon="exclamation-circle" />
<x-tooltip text="Bottom" position="bottom" icon="bell" />
<x-tooltip text="Left" position="left" icon="shield-exclamation" />
<x-tooltip text="Right" position="right" />
    @endverbatim
</x-code>
    </x-section>
    <x-section title="Size Variation" description="You can customize the icon size variation">
        <x-tooltip text="sm" sm />
        <x-tooltip text="md" md />
        <x-tooltip text="lg" lg />
<x-code language="blade">
    @verbatim
<x-tooltip text="Top" position="top" sm />
<x-tooltip text="Bottom" position="bottom" md />
<x-tooltip text="Left" position="left" lg />
    @endverbatim
</x-code>
    </x-section>
    <x-section title="Color Variation" description="You can customize the color variation">
        <x-tooltip text="Top" position="top" icon="exclamation-circle" color="orange" />
        <x-tooltip text="Bottom" position="bottom" icon="bell" color="red" />
        <x-tooltip text="Left" position="left" icon="shield-exclamation" color="sky" />
        <x-tooltip text="Right" position="right" color="pink" />
<x-code language="blade">
    @verbatim
<x-tooltip text="Top" position="top" icon="exclamation-circle" color="orange" />
<x-tooltip text="Bottom" position="bottom" icon="bell" color="red" />
<x-tooltip text="Left" position="left" icon="shield-exclamation" color="sky" />
<x-tooltip text="Right" position="right" color="pink" />
    @endverbatim
</x-code>
    </x-section>
    <x-section title="Outline Variation" description="You can use outline variation">
        <x-tooltip text="Top" position="top" icon="exclamation-circle" outline />
        <x-tooltip text="Bottom" position="bottom" icon="bell" outline />
        <x-tooltip text="Left" position="left" icon="shield-exclamation" outline />
        <x-tooltip text="Right" position="right" outline />
<x-code language="blade">
    @verbatim
<x-tooltip text="Top" position="top" />
<x-tooltip text="Bottom" position="bottom" />
<x-tooltip text="Left" position="left" />
<x-tooltip text="Right" position="right" />
    @endverbatim
</x-code>
    </x-section>
</x-layout>
