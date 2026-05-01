@php
    $releases = collect([
        ['title' => 'v3.0-alpha',  'description' => 'First alpha release.',     'date' => 'Feb 2026', 'icon' => 'beaker'],
        ['title' => 'v3.0-beta',   'description' => 'Community testing phase.', 'date' => 'Mar 2026', 'icon' => 'light-bulb'],
        ['title' => 'v3.0 stable', 'description' => 'Production-ready.',        'date' => 'Apr 2026', 'icon' => 'rocket-launch', 'color' => 'green'],
    ]);

    $alternateItems = collect([
        ['title' => 'v3.0-alpha',  'description' => 'First alpha release.',     'date' => 'Feb 2026'],
        ['title' => 'v3.0-beta',   'description' => 'Community testing phase.', 'date' => 'Mar 2026'],
        ['title' => 'v3.0 stable', 'description' => 'Production-ready.',        'date' => 'Apr 2026'],
    ]);

    $perItemColor = [
        ['title' => 'Default',        'date' => 'Q1'],
        ['title' => 'Green override', 'date' => 'Q2', 'color' => 'green'],
        ['title' => 'Red override',   'date' => 'Q3', 'color' => 'red'],
    ];

    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="timeline/main">
    <x-slot:title>
        Timeline
    </x-slot:title>
    <x-slot:description>
        Timeline component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Timeline\Main" title="Timeline" />
        <livewire:customization :customization="$customizationItems" component="Timeline\Items" title="Timeline Items" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
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
        </x-preview>
    </x-section>
    <x-section title="Render Modes">
        <div class="space-y-4">
            <p>
                Timeline supports two render modes: passing items via the <x-block>:items</x-block> prop
                (array or Collection) <b>or</b> declaring children as <x-block>&lt;x-timeline.items&gt;</x-block>
                in a slot. Combining both raises <x-block>InvalidArgumentException</x-block> at render time.
            </p>
            <p>
                <b>Array mode</b> auto-propagates container props (<x-block>horizontal</x-block>, <x-block>compact</x-block>,
                <x-block>style</x-block>, <x-block>alternate</x-block>) to each item. <b>Slot mode</b> requires those props
                to be passed explicitly per item — Laravel's <x-block>@@aware</x-block> directive does not propagate from
                class-based parents to slot children.
            </p>
            <x-preview language="blade" :contents="$arrayMode">
                <x-timeline :items="$releases" />
            </x-preview>
            <p>Slot mode unlocks <x-block>&lt;x-slot:marker&gt;</x-block> and rich content inside the default slot:</p>
            <x-preview language="blade" :contents="$slotMode">
                <x-timeline>
                    <x-timeline.items title="Planning" description="Research and spec." date="Q1">
                        <p class="mt-2 text-sm text-gray-600">
                            See the <a href="/changelog" class="underline">full changelog</a>.
                        </p>
                    </x-timeline.items>
                    <x-timeline.items title="Building" description="Implementation." date="Q2" />
                    <x-timeline.items title="Released" description="Tagged and published." date="Q3" />
                </x-timeline>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Horizontal Orientation">
        <x-preview language="blade" :contents="$horizontal">
            <x-timeline horizontal>
                <x-timeline.items title="Step A" description="Initial setup" horizontal />
                <x-timeline.items title="Step B" description="Configuration" horizontal />
                <x-timeline.items title="Step C" description="Deployment" horizontal />
                <x-timeline.items title="Step D" description="Production" horizontal />
            </x-timeline>
        </x-preview>
        <x-warning class="mt-4">
            Slot-mode items need the <x-block>horizontal</x-block> prop passed explicitly because
            Laravel's <x-block>@@aware</x-block> does not propagate from class-based parents to slot children.
            Array mode (<x-block>:items</x-block>) auto-propagates.
        </x-warning>
    </x-section>
    <x-section title="Alternate Layout">
        <x-preview language="blade" :contents="$alternate">
            <div class="max-w-md">
                <x-timeline :items="$alternateItems" alternate />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            Alternate uses a 3-column grid that distributes the timeline's horizontal space. Wrap it in a
            <x-block>max-w-*</x-block> container or apply <x-block>class="max-w-*"</x-block> to the timeline
            so the line lands at a comfortable midpoint instead of stretching across the full parent width.
        </x-warning>
    </x-section>
    <x-section title="Compact Spacing">
        <x-preview language="blade" :contents="$compact">
            <x-timeline compact>
                <x-timeline.items title="Step A" description="First." date="Jan" compact />
                <x-timeline.items title="Step B" description="Second." date="Feb" compact />
                <x-timeline.items title="Step C" description="Third." date="Mar" compact />
            </x-timeline>
        </x-preview>
    </x-section>
    <x-section title="Icon Markers">
        <x-preview language="blade" :contents="$icon">
            <x-timeline>
                <x-timeline.items title="Planning"
                                  description="Research and spec."
                                  icon="pencil-square" />
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
        </x-preview>
    </x-section>
    <x-section title="Custom Marker Slot">
        <x-preview language="blade" :contents="$markerSlot">
            <x-timeline color="rose">
                <x-timeline.items title="Numbered step 1" description="First step.">
                    <x-slot:marker>
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
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="grid gap-6 sm:grid-cols-2">
                <x-timeline>
                    <x-timeline.items title="Primary" description="Brand color" date="Q1" icon="rocket-launch" color="primary" />
                    <x-timeline.items title="Primary" description="Brand color" date="Q2" icon="rocket-launch" color="primary" />
                </x-timeline>
                <x-timeline>
                    <x-timeline.items title="Emerald" description="Calm green" date="Q1" icon="check-circle" color="emerald" />
                    <x-timeline.items title="Emerald" description="Calm green" date="Q2" icon="check-circle" color="emerald" />
                </x-timeline>
                <x-timeline>
                    <x-timeline.items title="Rose" description="Soft red" date="Q1" icon="heart" color="rose" />
                    <x-timeline.items title="Rose" description="Soft red" date="Q2" icon="heart" color="rose" />
                </x-timeline>
                <x-timeline>
                    <x-timeline.items title="Indigo" description="Deep blue" date="Q1" icon="bolt" color="indigo" />
                    <x-timeline.items title="Indigo" description="Deep blue" date="Q2" icon="bolt" color="indigo" />
                </x-timeline>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Style Variations">
        <x-preview language="blade" :contents="$styles">
            <div class="grid gap-6 sm:grid-cols-3">
                <x-timeline color="indigo" style="solid">
                    <x-timeline.items title="Solid" description="Filled marker" date="Q1" style="solid" />
                    <x-timeline.items title="Solid" description="Filled marker" date="Q2" style="solid" />
                </x-timeline>
                <x-timeline color="indigo" style="light">
                    <x-timeline.items title="Light" description="Tinted marker" date="Q1" style="light" />
                    <x-timeline.items title="Light" description="Tinted marker" date="Q2" style="light" />
                </x-timeline>
                <x-timeline color="indigo" style="outline">
                    <x-timeline.items title="Outline" description="Bordered marker" date="Q1" style="outline" />
                    <x-timeline.items title="Outline" description="Bordered marker" date="Q2" style="outline" />
                </x-timeline>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Per-Item Color Override">
        <x-preview language="blade" :contents="$itemColor">
            <x-timeline color="primary" :items="$perItemColor" />
        </x-preview>
    </x-section>
    @php
        $state = collect([
            ['title' => 'Preparing package', 'description' => 'The sender is preparing the package for shipment.', 'date' => '04/01/2026', 'icon' => 'check', 'color' => 'green'],
            ['title' => 'Shipping', 'description' => 'The package is in transit to the destination.', 'date' => '04/02/2026', 'icon' => 'clock', 'color' => 'yellow'],
            ['title' => 'Received', 'description' => 'The package has been delivered to the recipient.', 'date' => '04/04/2026', 'icon' => 'clock', 'color' => 'yellow'],
        ]);
    @endphp
    <x-section title="Current Activation State" description="An option to visually distinguish the current/active item in the timeline.">
        <div class="space-y-4">
            <p>
                Although there isn't a property to define a state as active, you can use the properties
                expected by each item to create a visual effect that indicates the current state in progress.
                Let's say you are creating a timeline of an online purchase. You can assemble the component as follows:
            </p>
            <x-preview language="blade" :contents="$currentActivation">
                <x-timeline :items="$state" horizontal class="pt-2" />
            </x-preview>
        </div>
    </x-section>
</x-layout>
