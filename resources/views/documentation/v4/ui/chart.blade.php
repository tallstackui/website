@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="chart">
    <x-slot:title>
        Chart
    </x-slot:title>
    <x-slot:description>
        Chart component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Chart" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        A dependency-free chart rendered as inline SVG. Every path, rectangle and arc is computed server-side, so there
        is no charting library and nothing to hydrate. AlpineJS is attached only when the chart is interactive.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-chart :series="[10, 40, 25, 60, 30, 80]" />
        </x-preview>
    </x-section>
    <x-section title="Types" new description="area (default), line, bar, pie and donut.">
        <x-preview language="blade" :contents="$types">
            <div class="space-y-6">
                <x-chart :series="[10, 40, 25, 60, 30, 80]" type="area" />
                <x-chart :series="[10, 40, 25, 60, 30, 80]" type="line" />
                <x-chart :series="[10, 40, 25, 60, 30, 80]" type="bar" />
                <x-chart :series="[35, 25, 20, 20]" :labels="['Direct', 'Organic', 'Social', 'Referral']" type="pie" legend />
                <x-chart :series="[35, 25, 20, 20]" :labels="['Direct', 'Organic', 'Social', 'Referral']" type="donut" legend />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Multiple Series" new description="Named series share one scale, so they compare at a glance.">
        <x-preview language="blade" :contents="$multiple">
            <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                     :series="[
                         ['name' => '2026', 'data' => [10, 40, 25, 60, 30, 80]],
                         ['name' => '2025', 'data' => [8, 30, 33, 41, 22, 55]],
                     ]"
                     grid
                     legend
                     tooltip
                     markers />
        </x-preview>
    </x-section>
    <x-section title="Stacked" new description="Area and bar only. Accumulates within each type and within each sign.">
        <x-preview language="blade" :contents="$stacked">
            <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                     type="bar"
                     stacked
                     :series="[
                         ['name' => 'New', 'data' => [12, 18, 15, 22]],
                         ['name' => 'Returning', 'data' => [30, 26, 34, 28]],
                     ]"
                     grid
                     legend />
        </x-preview>
    </x-section>
    <x-section title="Combining Types" new description="A series can declare a type of its own, which is what puts a trend line over a stack of bars.">
        <x-preview language="blade" :contents="$combining">
            <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                     type="bar"
                     stacked
                     :series="[
                         ['name' => 'New', 'data' => [12, 18, 15, 22]],
                         ['name' => 'Returning', 'data' => [30, 26, 34, 28]],
                         ['name' => 'Total', 'data' => [42, 44, 49, 50], 'type' => 'line'],
                     ]"
                     grid
                     legend
                     tooltip />
        </x-preview>
    </x-section>
    <x-section title="Secondary Axis" new description="Both axes share the tick count, so one set of gridlines serves either side.">
        <x-preview language="blade" :contents="$secondaryAxis">
            <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                     :series="[
                         ['name' => 'Revenue', 'data' => [1200, 1900, 1500, 2100]],
                         ['name' => 'Orders', 'data' => [8, 14, 11, 16], 'axis' => 'right'],
                     ]"
                     grid
                     legend
                     :prefix="['left' => '$']"
                     :suffix="['right' => ' un']" />
        </x-preview>
    </x-section>
    <x-section title="Colors" new description="Without colors, a single series uses color and several cycle a built-in sequence starting from it.">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-6">
                <x-chart :series="[10, 40, 25, 60, 30, 80]" color="emerald" />
                <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                         :colors="['red', 'blue', 'amber']"
                         :series="[
                             ['name' => 'A', 'data' => [10, 40, 25, 60]],
                             ['name' => 'B', 'data' => [22, 18, 40, 30]],
                             ['name' => 'C', 'data' => [5, 30, 15, 45]],
                         ]"
                         legend />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Chrome" new description="grid, legend, tooltip and markers are opt-in. Clicking a legend entry toggles its series.">
        <x-preview language="blade" :contents="$chrome">
            <x-chart :series="[10, 40, 25, 60, 30, 80]"
                     :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                     grid
                     legend
                     tooltip
                     markers />
        </x-preview>
    </x-section>
    <x-section title="Formatting" new description="prefix, suffix and decimals cover the common case. A closure wins over all three and receives the axis as a second argument.">
        <x-code language="blade" :contents="$formatting" />
    </x-section>
    <x-section title="Slots" new>
        <x-preview language="blade" :contents="$slots">
            <x-chart :series="[10, 40, 25, 60, 30, 80]" grid>
                <x-slot:header>Monthly Balance</x-slot:header>
                <x-slot:footer>Updated 2 minutes ago</x-slot:footer>
            </x-chart>
        </x-preview>
    </x-section>
    <x-section title="Inside a Card" new description="The component ships no card of its own, so paddingless lets the plot bleed to the edges.">
        <x-preview language="blade" :contents="$card">
            <x-card paddingless>
                <x-slot:header>Monthly Balance</x-slot:header>
                <x-chart :series="[10, 40, 25, 60, 30, 80]" grid prefix="$" class="p-4" />
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Skeleton" new description="series stops being required. Neutral fills, no axis labels, no legend, no tooltip: a shape, never a reading.">
        <x-preview language="blade" :contents="$skeleton">
            <div class="space-y-6">
                <x-chart skeleton />
                <x-chart skeleton="10" type="bar" :height="240" />
                <x-chart skeleton="5" type="donut" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Configuration" new description="Presentation only, each consulted when the matching attribute is absent. type is deliberately absent.">
        <x-code language="php" :contents="$configuration" />
    </x-section>
    <x-section title="Degenerate Input" new description="Everything that cannot be drawn fails loudly instead of degrading.">
        <x-table :headers="[
            ['index' => 'input', 'label' => 'Input'],
            ['index' => 'result', 'label' => 'Result'],
        ]" :rows="[
            ['input' => 'Absent series', 'result' => 'Throws, unless skeleton is set'],
            ['input' => 'Empty array', 'result' => 'Full height, no path'],
            ['input' => 'Single value', 'result' => 'Spans the plot as a constant series'],
            ['input' => 'Negative values on pie or donut', 'result' => 'Clamped to zero'],
            ['input' => 'More than one series on pie or donut', 'result' => 'Throws'],
            ['input' => 'Non-numeric, NAN, INF', 'result' => 'Throws'],
            ['input' => 'Unknown type or axis', 'result' => 'Throws'],
            ['input' => 'stacked on line or radial type', 'result' => 'Throws'],
            ['input' => 'stacked with a secondary axis', 'result' => 'Throws'],
            ['input' => 'grid on pie or donut', 'result' => 'Throws'],
            ['input' => 'Negative or non-integer decimals', 'result' => 'Throws'],
            ['input' => 'Formatting array keyed other than left/right', 'result' => 'Throws'],
        ]" />
    </x-section>
</x-layout>
