@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="environment">
    <x-slot:title>
        Environment
    </x-slot:title>
    <x-slot:description>
        Environment component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Environment" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            Many modern applications need to have different environments for different purposes, such as: local -
            for local development environment, staging - for general testing environment and production - for the
            actual application. The <x-block>environment</x-block> component consists of the current environment
            of the application in a summarized form to serve as a warning.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-environment />
        </x-preview>
    </x-section>
    <x-section title="Beyond Basic, EnvBar">
        <div class="space-y-4">
            <p>
                With the example above you should realize that the environment is a basic component. <b>With the release
                of version 2.x of TallStackUI a new helper was introduced: <a href="{{ route('documentation', ['v4', 'helpers', 'env-bar']) }}" wire:navigate class="underline">EnvBar</a>.</b> Unlike the environment component,
                the EnvBar is a fixed bar at the top of the screen that serves to display several other information
                about the current environment - not just the environment name and branch. If you want to go further
                and <a href="{{ route('documentation', ['v4', 'helpers', 'env-bar']) }}" class="underline">use the EnvBar click here.</a>
            </p>
            <img src="{{ url('assets/images/env-bar.png') }}" />
        </div>
    </x-section>
    <x-section title="Round Variation" description="Boolean enables rounded-full. The prop also accepts the size keys xs, sm, md, lg, xl to apply the matching rounded-{size} utility. Without the prop, the component falls back to rounded-md. The square attribute still wins over round.">
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
                Internally TallStackUI uses a simple algorithm to get the current branch name based
                on the <x-block>.git</x-block> folder and its content. However, you can create your
                own algorithm to be used for branch detection.
            </p>
            <p>
                This is the current original algorithm:
            </p>
            <x-code :contents="$branchAlgorithm" disable-copy />
            <p>
                If you want to create your own algorithm, just define it through a service provider:
            </p>
            <x-code :contents="$customAlgorithm" disable-copy />
        </div>
    </x-section>
    <x-section title="Color Scheme">
        <div class="space-y-4">
            <p>
                You may have noticed that there is no way to define component colors. Internally TallStackUI defines default
                colors by environment name, however you can customize all colors, as well as create new ones by environment name.
            </p>
            <ul class="space-y-2">
                <li><x-block>local</x-block> - shades of <b class="text-green-700">green</b> colors</li>
                <li><x-block>staging</x-block> - shades of <b class="text-yellow-700">yellow</b> colors</li>
                <li><x-block>sandbox</x-block> - shades of <b class="text-orange-700">orange</b> colors</li>
                <li><x-block>production</x-block> - shades of <b class="text-red-700">red</b> colors</li>
                <li>Others - shades of <b class="text-primary-700">primary</b> colors</li>
            </ul>
            <p>
                You can customize or create new colors per room by following <a href="{{ route('documentation', ['v4', 'customization', 'color']) }}" class="underline">TallStackUI color customization.</a>
            </p>
        </div>
    </x-section>
</x-layout>
