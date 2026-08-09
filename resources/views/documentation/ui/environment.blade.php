@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="environment">
    <x-slot:title>Environment</x-slot>
    <x-slot:description>Environment component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Environment" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-environment />
        </x-preview>
    </x-section>
    <x-section title="Beyond Basic, EnvBar">
        <div class="space-y-4">
            <p>
                With the example above you should realize that the environment
                is a basic component. If you want to go further in order to use something more sophisticated,
                consider to know more about the <x-refer :doc="['helpers', 'env-bar']">EnvBar.</x-refer>
                Unlike the environment component, the EnvBar is a fixed bar at
                the top of the screen that serves to display several other
                information about the current environment - not just the
                environment name and branch.
            </p>
            <img src="{{ url("assets/images/env-bar.png") }}" />
        </div>
    </x-section>
    <x-section title="Round Variation">
        <x-preview language="blade" :contents="$round">
            <div class="flex flex-col items-start space-y-2">
                <x-environment round />
                <x-environment round="xs" />
                <x-environment round="sm" />
                <x-environment round="md" />
                <x-environment round="lg" />
                <x-environment round="xl" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Square Variation">
        <x-preview language="blade" :contents="$square">
            <x-environment square />
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col items-start space-y-2">
                <x-environment xs />
                <x-environment sm />
                <x-environment md />
                <x-environment lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Without Branch">
        <x-preview language="blade" :contents="$withoutBranch">
            <x-environment without-branch />
        </x-preview>
    </x-section>
    <x-section title="Branch Detection Algorithm">
        <div class="space-y-4">
            <p>
                Internally TallStackUI uses a simple algorithm to get the
                current branch name based on the
                <x-block>.git</x-block>
                folder and its content. However, you can create your own
                algorithm to be used for branch detection.
            </p>
            <p>This is the current original algorithm:</p>
            <x-code :contents="$branchAlgorithm" disable-copy />
            <p>
                If you want to create your own algorithm, just define it through
                a service provider:
            </p>
            <x-code :contents="$customAlgorithm" disable-copy />
        </div>
    </x-section>
    <x-section title="Color Scheme">
        <div class="space-y-4">
            <p>
                You may have noticed that there is no way to define component
                colors. Internally TallStackUI defines default colors by
                environment name, however you can customize all colors, as well
                as create new ones by environment name.
            </p>
            <x-table
                :headers="[
                    ['index' => 'environment', 'label' => 'Environment'],
                    ['index' => 'color', 'label' => 'Color'],
                ]"
                :rows="[
                    ['environment' => 'local', 'color' => 'green'],
                    ['environment' => 'staging', 'color' => 'yellow'],
                    ['environment' => 'sandbox', 'color' => 'orange'],
                    ['environment' => 'production', 'color' => 'red'],
                    ['environment' => 'Others', 'color' => 'primary'],
                ]"
            >
                @interact("column_environment", $row)
                    @if ($row["environment"] === "Others")
                        Others
                    @else
                        <x-block>{{ $row["environment"] }}</x-block>
                    @endif
                @endinteract

                @interact("column_color", $row)
                    shades of
                    <b
                        @class([
                            "text-green-700" => $row["color"] === "green",
                            "text-yellow-700" => $row["color"] === "yellow",
                            "text-orange-700" => $row["color"] === "orange",
                            "text-red-700" => $row["color"] === "red",
                            "text-primary-700" => $row["color"] === "primary",
                        ])
                    >
                        {{ $row["color"] }}
                    </b>
                    colors
                @endinteract
            </x-table>
            <p>
                You can customize or create new colors per room by following
                <x-refer :doc="['customization', 'color']">
                    TallStackUI color customization.
                </x-refer>
            </p>
        </div>
    </x-section>
</x-layout>
