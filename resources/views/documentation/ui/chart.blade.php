@php
    use Illuminate\Support\Number;

    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $revenue = [1250.5, 3400.75, 2100, 4800.25, 3900, 6200.8];
    $orders = [12, 30, 21, 48, 39, 62];
@endphp

<x-layout :$content ai="chart">
    <x-slot:title>Chart</x-slot>
    <x-slot:description>Chart component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Chart" />
    </x-slot>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <x-chart :series="[10, 40, 25, 60, 30, 80]" />
            </x-preview>
            <p>
                The
                <x-block>chart</x-block>
                works on its own or inside a
                <x-block>card</x-block>.
                This first example is shown without a card. Later previews wrap
                the chart in a card only so they are easier to read.
            </p>
        </div>
    </x-section>
    <x-section
        title="Types"
        description="area (default), line, bar, pie and donut. Pie and donut need labels."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$types">
                <div class="space-y-4">
                    <x-card shadowless bordered paddingless>
                        <x-chart :series="[10, 40, 25, 60, 30, 80]" area />
                    </x-card>
                    <x-card shadowless bordered paddingless>
                        <x-chart :series="[10, 40, 25, 60, 30, 80]" line />
                    </x-card>
                    <x-card shadowless bordered paddingless>
                        <x-chart :series="[10, 40, 25, 60, 30, 80]" bar />
                    </x-card>
                    <x-card shadowless bordered>
                        <x-chart
                            :series="[35, 25, 20, 20]"
                            :labels="['Direct', 'Organic', 'Social', 'Referral']"
                            pie
                            legend
                        />
                    </x-card>
                    <x-card shadowless bordered>
                        <x-chart
                            :series="[35, 25, 20, 20]"
                            :labels="['Direct', 'Organic', 'Social', 'Referral']"
                            donut
                            legend
                        />
                    </x-card>
                </div>
            </x-preview>
            <p>
                Each type is also a flag, so
                <x-block>line</x-block>
                is the same as
                <x-block>type="line"</x-block>.
                Using two flags at once, or a flag next to a
                <x-block>type</x-block>
                that contradicts it, throws.
            </p>
        </div>
    </x-section>
    <x-section
        title="Multiple Series"
        description="Named series share one scale. grid, legend, tooltip and markers are opt-in. Clicking a legend entry toggles its series."
    >
        <x-preview language="blade" :contents="$multiple">
            <x-card shadowless bordered>
                <x-chart
                    :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                    :series="[
                    ['name' => '2026', 'data' => [10, 40, 25, 60, 30, 80]],
                    ['name' => '2025', 'data' => [8, 30, 33, 41, 22, 55]],
                ]"
                    grid
                    legend
                    tooltip
                    markers
                />
            </x-card>
        </x-preview>
    </x-section>
    <x-section
        title="Stacked"
        description="An option to stack series on top of each other, instead of overlapping."
    >
        <x-preview language="blade" :contents="$stacked">
            <x-card shadowless bordered>
                <x-chart
                    :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                    bar
                    stacked
                    :series="[
                        ['name' => 'Active', 'data' => [12, 18, 15, 22]],
                        ['name' => 'Inactive', 'data' => [30, 26, 34, 28]],
                        ['name' => 'Recurring', 'data' => [18, 41, 12, 62]],
                    ]"
                    grid
                    legend
                />
            </x-card>
        </x-preview>
    </x-section>
    <x-section
        title="Combining Types"
        description="An option to combine different chart types within the same visualization."
    >
        <x-preview language="blade" :contents="$combining">
            <x-card shadowless bordered>
                <x-chart
                    :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                    bar
                    stacked
                    :series="[
                        ['name' => 'New', 'data' => [12, 18, 15, 22]],
                        ['name' => 'Returning', 'data' => [30, 26, 34, 28]],
                        ['name' => 'Total', 'data' => [42, 44, 49, 50], 'type' => 'line'],
                    ]"
                    grid
                    legend
                    tooltip
                />
            </x-card>
        </x-preview>
    </x-section>
    <x-section
        title="Secondary Axis"
        description="An option to plot a series against a second vertical axis on the right."
    >
        <x-preview language="blade" :contents="$secondaryAxis">
            <x-card shadowless bordered>
                <x-chart
                    :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                    :series="[
                    ['name' => 'Revenue', 'data' => [1200, 1900, 1500, 2100]],
                    ['name' => 'Orders', 'data' => [8, 14, 11, 16], 'axis' => 'right'],
                ]"
                    grid
                    legend
                    :prefix="['left' => '$']"
                    :suffix="['right' => ' un']"
                />
            </x-card>
        </x-preview>
    </x-section>
    <x-section
        title="Colors"
        description="Use color for a single series. Use colors when there are several."
    >
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-6">
                <x-card shadowless bordered>
                    <x-chart :series="[10, 40, 25, 60, 30, 80]" color="emerald" />
                </x-card>
                <x-card shadowless bordered>
                    <x-chart
                        :labels="['Jan', 'Feb', 'Mar', 'Apr']"
                        :colors="['red', 'blue', 'amber']"
                        :series="[
                            ['name' => 'A', 'data' => [10, 40, 25, 60]],
                            ['name' => 'B', 'data' => [22, 18, 40, 30]],
                            ['name' => 'C', 'data' => [5, 30, 15, 45]],
                        ]"
                        legend
                    />
                </x-card>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Formatting"
        description="prefix, suffix and decimals cover the common case. A closure wins over all three and receives the axis as a second argument."
    >
        <x-preview language="blade" :contents="$formatting">
            <div class="space-y-8">
                <x-card shadowless bordered>
                    <x-chart :series="$revenue" grid prefix="$" :decimals="2" />
                </x-card>
                <x-card shadowless bordered>
                    <x-chart
                        :series="$revenue"
                        grid
                        :formatter="fn (float $value) => Number::currency($value, 'BRL', 'pt_BR')"
                    />
                </x-card>
                <x-card shadowless bordered>
                    <x-chart
                        :formatter="fn (float $value, string $axis) => $axis === 'right'
                            ? $value.' un'
                            : Number::currency($value, 'BRL', 'pt_BR')"
                        :series="[
                            ['name' => 'Revenue', 'data' => $revenue],
                            ['name' => 'Orders', 'data' => $orders, 'axis' => 'right'],
                        ]"
                        grid
                        legend
                        tooltip
                    />
                </x-card>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Slots"
        description="An option to insert content above and below the plot."
    >
        <x-preview language="blade" :contents="$slots">
            <x-card shadowless bordered>
                <x-chart :series="[10, 40, 25, 60, 30, 80]" grid>
                    <x-slot:header>Monthly Balance</x-slot:header>
                    <x-slot:footer>
                        <div class="flex justify-end">
                            Updated 2 minutes ago
                        </div>
                    </x-slot:footer>
                </x-chart>
            </x-card>
        </x-preview>
    </x-section>
    <x-section
        title="Skeleton"
        description="An option to display a lazy loading skeleton indicator."
    >
        <x-preview language="blade" :contents="$skeleton">
            <div class="space-y-6">
                <x-card shadowless bordered>
                    <x-chart skeleton />
                </x-card>
                <x-card shadowless bordered>
                    <x-chart skeleton="10" bar />
                </x-card>
                <x-card shadowless bordered>
                    <x-chart skeleton="5" donut />
                </x-card>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Configuration">
        <p>
            There are a few things that can be configured using the
            <x-refer doc="configuration">configuration file.</x-refer>
            For example, you can control the height of a chart by using the
            <x-block>height</x-block>
            attribute inline per chart,
            or globally by using the
            <x-block>chart.height</x-block>
            configuration. The default value of the
            <x-block>height</x-block>
            is
            <x-block>240</x-block>
            in the <x-refer doc="configuration">configuration file.</x-refer>
        </p>
    </x-section>
    <x-section title="Soft Customization" disable-copy>
        <x-warning>
            Using
            <x-refer :doc="['customization', 'soft']">soft customization</x-refer>
            you can paint the SVG. It does not redraw it. Every
            <x-block>plot.*</x-block>
            block works like any other, but the shapes are computed server-side
            and cannot be changed. Curvature, corner radius, the donut hole and
            the tick count are fixed.
        </x-warning>
    </x-section>
    <x-section
        title="Invalid Input"
        description="What happens when the data cannot be drawn."
    >
        <x-table
            :headers="[
                ['index' => 'input', 'label' => 'Input'],
                ['index' => 'result', 'label' => 'Result'],
            ]"
            :rows="[
                ['input' => 'Absent series', 'result' => 'Throws, unless skeleton is set'],
                ['input' => 'Empty array', 'result' => 'Full height, no path'],
                ['input' => 'Single value', 'result' => 'Spans the plot as a constant series'],
                ['input' => 'Negative values on pie or donut', 'result' => 'Clamped to zero'],
                ['input' => 'More than one series on pie or donut', 'result' => 'Throw an exception'],
                ['input' => 'Non-numeric, NAN, INF', 'result' => 'Throw an exception'],
                ['input' => 'Unknown type or axis', 'result' => 'Throw an exception'],
                ['input' => 'Two type flags at once', 'result' => 'Throw an exception'],
                ['input' => 'A type flag that contradicts type', 'result' => 'Throw an exception'],
                ['input' => 'stacked on line or radial type', 'result' => 'Throw an exception'],
                ['input' => 'stacked with a secondary axis', 'result' => 'Throw an exception'],
                ['input' => 'grid on pie or donut', 'result' => 'Throw an exception'],
                ['input' => 'Negative or non-integer decimals', 'result' => 'Throw an exception'],
                ['input' => 'Formatting array keyed other than left/right', 'result' => 'Throw an exception'],
            ]"
        />
    </x-section>
</x-layout>
