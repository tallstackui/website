<?php

namespace App\Enums\Examples\V4\Ui;

class Timeline
{
    public const string BASIC = <<<'HTML'
    <x-timeline>
        <x-timeline.items title="v1.0 shipped"
                          description="Initial release."
                          date="Jan 2026" />
        <x-timeline.items title="v1.1 patch"
                          description="Bugfixes and refinements."
                          date="Feb 2026" />
        <x-timeline.items title="v2.0 released"
                          description="Major rewrite of the suite."
                          date="Mar 2026" />
    </x-timeline>
    HTML;

    public const string ARRAY_MODE = <<<'BLADE'
    <!--
    Each entry accepts the following keys: title, description, date, icon, color.
    Raw HTML values (default slot, custom marker) are NOT accepted in array mode —
    use slot mode for rich content instead.
    -->

    @php
        $releases = collect([
            ['title' => 'v3.0-alpha',  'description' => 'First alpha release.',     'date' => 'Feb 2026', 'icon' => 'beaker'],
            ['title' => 'v3.0-beta',   'description' => 'Community testing phase.', 'date' => 'Mar 2026', 'icon' => 'light-bulb'],
            ['title' => 'v3.0 stable', 'description' => 'Production-ready.',        'date' => 'Apr 2026', 'icon' => 'rocket-launch', 'color' => 'green'],
        ]);
    @endphp

    <x-timeline :items="$releases" />
    BLADE;

    public const string SLOT_MODE = <<<'HTML'
    <x-timeline>
        <x-timeline.items title="Planning" description="Research and spec." date="Q1">
            <p class="mt-2 text-sm text-gray-600">
                See the <a href="/changelog" class="underline">full changelog</a>.
            </p>
        </x-timeline.items>
        <x-timeline.items title="Building" description="Implementation." date="Q2" />
        <x-timeline.items title="Released" description="Tagged and published." date="Q3" />
    </x-timeline>
    HTML;

    public const string HORIZONTAL = <<<'HTML'
    <x-timeline horizontal>
        <x-timeline.items title="Step A" description="Initial setup" horizontal />
        <x-timeline.items title="Step B" description="Configuration" horizontal />
        <x-timeline.items title="Step C" description="Deployment" horizontal />
        <x-timeline.items title="Step D" description="Production" horizontal />
    </x-timeline>

    <!-- or -->

    @php
        $releases = collect([
            ['title' => 'v3.0-alpha',  'description' => 'First alpha release.',     'date' => 'Feb 2026', 'icon' => 'beaker'],
            ['title' => 'v3.0-beta',   'description' => 'Community testing phase.', 'date' => 'Mar 2026', 'icon' => 'light-bulb'],
            ['title' => 'v3.0 stable', 'description' => 'Production-ready.',        'date' => 'Apr 2026', 'icon' => 'rocket-launch', 'color' => 'green'],
        ]);
    @endphp

    <x-timeline :items="$releases" horizontal />
    HTML;

    public const string ALTERNATE = <<<'HTML'
    <!--
    Alternate uses a 3-column grid (`[1fr_auto_1fr]`) that distributes the timeline's
    horizontal space. Markers land at 50% of the timeline width. Constrain via a wrapping
    container or `class="max-w-*"` on `<x-timeline>` when you do not want it to fill the parent.
    -->

    @php
        $items = collect([
            ['title' => 'v3.0-alpha',  'description' => 'First alpha release.',     'date' => 'Feb 2026'],
            ['title' => 'v3.0-beta',   'description' => 'Community testing phase.', 'date' => 'Mar 2026'],
            ['title' => 'v3.0 stable', 'description' => 'Production-ready.',        'date' => 'Apr 2026'],
        ]);
    @endphp

    <div class="max-w-md">
        <x-timeline :items="$items" alternate /> {{-- [tl! highlight] --}}
    </div>
    HTML;

    public const string COMPACT = <<<'HTML'
    <!-- Default: 24px gap between items, line with segments -->
    <x-timeline>
        <x-timeline.items title="Step A" description="First." date="Jan" />
        <x-timeline.items title="Step B" description="Second." date="Feb" />
        <x-timeline.items title="Step C" description="Third." date="Mar" />
    </x-timeline>

    <!-- Compact: continuous line, no gap between items -->
    <x-timeline compact> {{-- [tl! highlight] --}}
        <x-timeline.items title="Step A" description="First." date="Jan" compact />
        <x-timeline.items title="Step B" description="Second." date="Feb" compact />
        <x-timeline.items title="Step C" description="Third." date="Mar" compact />
    </x-timeline>
    HTML;

    public const string ICON = <<<'HTML'
    <x-timeline>
        <x-timeline.items title="Planning"
                          description="Research and spec."
                          icon="pencil-square" /> {{-- [tl! highlight] --}}
        <x-timeline.items title="Building"
                          description="Implementation."
                          icon="wrench-screwdriver" />
        <x-timeline.items title="Testing"
                          description="Feature + browser tests."
                          icon="beaker" />
        <x-timeline.items title="Release"
                          description="Tagged and published."
                          icon="rocket-launch" />
    </x-timeline>
    HTML;

    public const string MARKER_SLOT = <<<'HTML'
    <x-timeline color="rose">
        <x-timeline.items title="Numbered step 1" description="First step.">
            <x-slot:marker> {{-- [tl! highlight:3] --}}
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-rose-600 text-xs font-bold text-white">1</span>
            </x-slot:marker>
        </x-timeline.items>
        <x-timeline.items title="Numbered step 2" description="Second step.">
            <x-slot:marker>
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-rose-600 text-xs font-bold text-white">2</span>
            </x-slot:marker>
        </x-timeline.items>
        <x-timeline.items title="Numbered step 3" description="Third step.">
            <x-slot:marker>
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-rose-600 text-xs font-bold text-white">3</span>
            </x-slot:marker>
        </x-timeline.items>
    </x-timeline>
    HTML;

    public const string COLORS = <<<'HTML'
    <!-- Support all TailwindCSS colors. -->

    <x-timeline color="primary">...</x-timeline>
    <x-timeline color="emerald">...</x-timeline>
    <x-timeline color="rose">...</x-timeline>
    <x-timeline color="indigo">...</x-timeline>
    HTML;

    public const string STYLES = <<<'HTML'
    <!-- solid: filled marker with color fill + white ring (default) -->
    <x-timeline color="indigo" style="solid">...</x-timeline>

    <!-- light: tinted marker with lighter color background -->
    <x-timeline color="indigo" style="light">...</x-timeline>

    <!-- outline: transparent marker with colored border -->
    <x-timeline color="indigo" style="outline">...</x-timeline>
    HTML;

    public const string ITEM_COLOR = <<<'HTML'
    @php
        $items = [
            ['title' => 'Default', 'date' => 'Q1'],
            ['title' => 'Green override', 'date' => 'Q2', 'color' => 'green'], // [tl! highlight:1]
            ['title' => 'Red override', 'date' => 'Q3', 'color' => 'red'],
        ];
    @endphp

    <x-timeline color="primary" :items="$items" />
    HTML;

    public const string CURRENT_ACTIVATION = <<<'HTML'
    @php
        $items = collect([
            ['title' => 'Preparing package', 'description' => 'The sender is preparing the package for shipment.', 'date' => '04/01/2026', 'icon' => 'check', 'color' => 'green'],
            ['title' => 'Shipping', 'description' => 'The package is in transit to the destination.', 'date' => '04/02/2026', 'icon' => 'clock', 'color' => 'yellow'],
            ['title' => 'Received', 'description' => 'The package has been delivered to the recipient.', 'date' => '04/04/2026', 'icon' => 'clock', 'color' => 'yellow'],
        ]);
    @endphp

    <x-timeline :items="$state" horizontal />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->timeline()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->timeline('items')
        ->block('block', 'classes');
    HTML;
}
