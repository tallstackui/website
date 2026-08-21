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
                <x-block>card</x-block>
                . This first example is shown without a card. Later previews
                wrap the chart in a card only so they are easier to read.
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
                <x-block>type="line"</x-block>
                . Using two flags at once, or a flag next to a
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
                    <x-chart
                        :series="[10, 40, 25, 60, 30, 80]"
                        color="emerald"
                    />
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
                    <x-chart
                        :series="$revenue"
                        grid
                        prefix="$"
                        :decimals="2"
                    />
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
        title="Curve"
        new
        description="How a line joins its points: smooth, straight or step."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$curve">
                <div class="space-y-4">
                    <x-card shadowless bordered paddingless>
                        <x-chart
                            :series="[10, 40, 25, 60, 30, 80]"
                            :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                            curve="straight"
                        />
                    </x-card>
                    <x-card shadowless bordered paddingless>
                        <x-chart
                            :series="[10, 40, 25, 60, 30, 80]"
                            :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                            curve="step"
                        />
                    </x-card>
                    <x-card shadowless bordered paddingless>
                        <x-chart
                            :series="[
                                [
                                    'name' => 'Actual',
                                    'data' => [10, 40, 25, 60, 30, 80],
                                ],
                                [
                                    'name' => 'Target',
                                    'data' => [12, 35, 28, 55, 32, 75],
                                    'curve' => 'step',
                                ],
                            ]"
                            line
                            legend
                        />
                    </x-card>
                </div>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'curve', 'label' => 'Curve'],
                    ['index' => 'behaviour', 'label' => 'Behaviour'],
                ]"
                :rows="[
                    ['curve' => 'smooth', 'behaviour' => 'A monotone cubic through every point, which never overshoots the data. Default'],
                    ['curve' => 'straight', 'behaviour' => 'A line segment between consecutive points'],
                    ['curve' => 'step', 'behaviour' => 'Holds each value until the next index, then jumps'],
                ]"
            >
                @interact("column_curve", $row)
                    <x-block>{{ $row["curve"] }}</x-block>
                @endinteract
            </x-table>
            <p>
                A series can pick its own through a
                <x-block>curve</x-block>
                key next to
                <x-block>type</x-block>
                and
                <x-block>axis</x-block>
                . A stacked band walks its lower edge with the same shape, so
                steps stack without cutting across each other's corners. A
                radial type has no line to shape and refuses the attribute.
            </p>
        </div>
    </x-section>
    <x-section
        title="Gaps"
        new
        description="A null in the data is a gap, not a zero."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$gaps">
                <x-card shadowless bordered paddingless>
                    <x-chart
                        :series="[44, 31, 38, null, 32, 55, 51, 67, 22, 34]"
                        markers
                    />
                </x-card>
            </x-preview>
            <p>
                The line and the area break on either side of a
                <x-block>null</x-block>
                . A lone value between two gaps keeps its marker. No bar is
                drawn at a gap, unlike a zero, which keeps its hairline. The
                tooltip skips that series at the index and the scale ignores it.
                A pie or donut counts it as zero.
            </p>
        </div>
    </x-section>
    <x-section
        title="Rounded Corners"
        new
        description="An option to set the corner radius of the bars."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$roundedCorners">
                <x-card shadowless bordered paddingless>
                    <x-chart
                        :series="[12, 18, 15, 22, 30, 26]"
                        :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
                        bar
                        round="md"
                        corners="end"
                    />
                </x-card>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'corners', 'label' => 'Corners'],
                    ['index' => 'behaviour', 'label' => 'Behaviour'],
                ]"
                :rows="[
                    ['corners' => 'all', 'behaviour' => 'Every corner of a bar, and both ends of a stacked column. Default'],
                    ['corners' => 'end', 'behaviour' => 'Only the end away from the axis: the top of a positive bar, the bottom of a negative one, the far end of a stack'],
                ]"
            >
                @interact("column_corners", $row)
                    <x-block>{{ $row["corners"] }}</x-block>
                @endinteract
            </x-table>
            <p>
                <x-block>round</x-block>
                accepts
                <x-block>none</x-block>
                ,
                <x-block>sm</x-block>
                (the radius bars already had),
                <x-block>md</x-block>
                or
                <x-block>lg</x-block>
                . Both attributes also answer to the configuration. A radial
                type refuses them when they are passed explicitly; a configured
                default is ignored there, the way
                <x-block>grid</x-block>
                already behaves.
            </p>
        </div>
    </x-section>
    <x-section
        title="Axis Labels"
        new
        description="How the horizontal axis labels avoid overlapping on narrow plots."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$axisLabels">
                <x-card shadowless bordered paddingless>
                    <x-chart
                        :series="[
                            10, 40, 25, 60, 30, 80, 45, 20, 55, 35, 70, 15,
                        ]"
                        :labels="[
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'Sep',
                            'Oct',
                            'Nov',
                            'Dec',
                        ]"
                        fit="rotate"
                    />
                </x-card>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'fit', 'label' => 'Fit'],
                    ['index' => 'behaviour', 'label' => 'Behaviour'],
                ]"
                :rows="[
                    ['fit' => 'thin', 'behaviour' => 'Shows every n-th label from the first one. The axis keeps its height. Default'],
                    ['fit' => 'rotate', 'behaviour' => 'Slants every label by -45°, then thins only what still collides'],
                    ['fit' => 'stagger', 'behaviour' => 'Alternates the labels over two rows, thinning each row on its own'],
                ]"
            >
                @interact("column_fit", $row)
                    <x-block>{{ $row["fit"] }}</x-block>
                @endinteract
            </x-table>
            <p>
                Whenever
                <x-block>labels</x-block>
                exist, the axis measures itself in the browser and hides or
                rearranges captions so the visible ones never touch. It
                re-measures on resize, after a Livewire update and once fonts
                load. The default comes from
                <x-block>fit</x-block>
                in the
                <x-refer doc="configuration">configuration file.</x-refer>
            </p>
        </div>
    </x-section>
    <x-section
        title="Slots"
        description="An option to insert content above and below the plot."
    >
        <x-preview language="blade" :contents="$slots">
            <x-card shadowless bordered>
                <x-chart :series="[10, 40, 25, 60, 30, 80]" grid>
                    <x-slot:header>
                        Monthly Balance
                    </x-slot>
                    <x-slot:footer>
                        <div class="flex justify-end">
                            Updated 2 minutes ago
                        </div>
                    </x-slot>
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
            Height, grid, legend, tooltip, markers,
            <x-block>fit</x-block>
            ,
            <x-block>curve</x-block>
            ,
            <x-block>round</x-block>
            and
            <x-block>corners</x-block>
            all fall back to that file when the matching attribute is absent.
            The default
            <x-block>height</x-block>
            is
            <x-block>240</x-block>
            . A radial type ignores a configured
            <x-block>grid</x-block>
            ,
            <x-block>curve</x-block>
            ,
            <x-block>round</x-block>
            or
            <x-block>corners</x-block>
            rather than throwing; passing any of them explicitly on a pie or
            donut still throws.
        </p>
    </x-section>
    <x-section title="Soft Customization" disable-copy>
        <x-warning>
            Using
            <x-refer :doc="['customization', 'soft']">
                soft customization
            </x-refer>
            you can paint the SVG. It does not redraw it. Every
            <x-block>plot.*</x-block>
            block works like any other, but the shapes are computed server-side.
            The curve and the corners answer to
            <x-block>curve</x-block>
            ,
            <x-block>round</x-block>
            and
            <x-block>corners</x-block>
            . The donut hole and the tick count stay fixed.
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
                ['input' => 'null inside data', 'result' => 'A gap: the line breaks, no bar is drawn. A pie or donut counts it as zero'],
                ['input' => 'Non-numeric, NAN, INF', 'result' => 'Throw an exception. null is a gap, not an error'],
                ['input' => 'Unknown type, axis, curve, round or corners', 'result' => 'Throw an exception'],
                ['input' => 'curve, round or corners on pie or donut', 'result' => 'Throw when passed explicitly. A configured default is ignored'],
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
