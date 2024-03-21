@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Progress
        <x-slot:version>
            v1.21
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Progress component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="progress" />
        <livewire:documentation.personalization :$personalization component="progress.circle" />
    </x-slot:personalization>
    <x-section title="Basic Usage" anchor="normal-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-progress :percent="50" />
                <x-progress percent="50.55" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Styles" anchor="normal-styles">
        <x-preview language="blade" :contents="$styles">
            <div class="space-y-2">
                <x-progress :percent="50" />
                <x-progress :percent="50" title="Percentage" />
                <x-progress :percent="50" floating />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Without Text" anchor="normal-without-text" description="An option to do not display any text.">
        <x-preview language="blade" :contents="$withoutText">
            <div class="space-y-2">
                <x-progress :percent="50" without-text />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="normal-size-variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="space-y-2">
                <x-progress :percent="50" xs />
                <x-progress :percent="50" sm />
                <x-progress :percent="50" md />
                <x-progress :percent="50" lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="normal-color-variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-progress :percent="50" />
                <x-progress :percent="50" color="secondary" />
                <x-progress :percent="50" color="slate" />
                <x-progress :percent="50" color="gray" />
                <x-progress :percent="50" color="zinc" />
                <x-progress :percent="50" color="neutral" />
                <x-progress :percent="50" color="stone" />
                <x-progress :percent="50" color="red" />
                <x-progress :percent="50" color="orange" />
                <x-progress :percent="50" color="amber" />
                <x-progress :percent="50" color="yellow" />
                <x-progress :percent="50" color="lime" />
                <x-progress :percent="50" color="green" />
                <x-progress :percent="50" color="emerald" />
                <x-progress :percent="50" color="teal" />
                <x-progress :percent="50" color="cyan" />
                <x-progress :percent="50" color="sky" />
                <x-progress :percent="50" color="blue" />
                <x-progress :percent="50" color="indigo" />
                <x-progress :percent="50" color="violet" />
                <x-progress :percent="50" color="purple" />
                <x-progress :percent="50" color="fuchsia" />
                <x-progress :percent="50" color="pink" />
                <x-progress :percent="50" color="rose" />
                <x-progress :percent="50" color="black" />
                <x-progress :percent="50" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations" anchor="normal-light-variations">
        <x-preview language="blade" :contents="$lights">
            <div class="space-y-2">
                <x-progress :percent="50" light />
                <x-progress :percent="50" color="secondary" light />
                <x-progress :percent="50" color="slate" light />
                <x-progress :percent="50" color="gray" light />
                <x-progress :percent="50" color="zinc" light />
                <x-progress :percent="50" color="neutral" light />
                <x-progress :percent="50" color="stone" light />
                <x-progress :percent="50" color="red" light />
                <x-progress :percent="50" color="orange" light />
                <x-progress :percent="50" color="amber" light />
                <x-progress :percent="50" color="yellow" light />
                <x-progress :percent="50" color="lime" light />
                <x-progress :percent="50" color="green" light />
                <x-progress :percent="50" color="emerald" light />
                <x-progress :percent="50" color="teal" light />
                <x-progress :percent="50" color="cyan" light />
                <x-progress :percent="50" color="sky" light />
                <x-progress :percent="50" color="blue" light />
                <x-progress :percent="50" color="indigo" light />
                <x-progress :percent="50" color="violet" light />
                <x-progress :percent="50" color="purple" light />
                <x-progress :percent="50" color="fuchsia" light />
                <x-progress :percent="50" color="pink" light />
                <x-progress :percent="50" color="rose" light />
                <x-progress :percent="50" color="black" light />
                <x-progress :percent="50" color="white" light />
            </div>
        </x-preview>
    </x-section>
    <x-separator text="Circle" />
    <x-section title="Basic Usage" anchor="circle-basic-usage">
        <x-preview language="blade" :contents="$circleBasic">
            <div class="space-y-2">
                <x-progress.circle :percent="50" />
                <x-progress.circle percent="50.55" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Strokes" anchor="circle-strokes">
        <x-preview language="blade" :contents="$circleStrokes">
            <div class="my-4">
                <x-progress.circle :percent="50"
                                   :stroke-circle="1"
                                   :stroke-percent="2" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="circle-size-variations">
        <x-preview language="blade" :contents="$circleSizes">
            <div class="flex flex-row items-center">
                <x-progress.circle :percent="50" xs />
                <x-progress.circle :percent="50" sm />
                <x-progress.circle :percent="50" md />
                <x-progress.circle :percent="50" lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="circle-color-variations">
        <x-preview language="blade" :contents="$circleColors">
            <div class="grid grid-cols-3 sm:grid-cols-5">
                <x-progress.circle :percent="50" />
                <x-progress.circle :percent="50" color="secondary" />
                <x-progress.circle :percent="50" color="slate" />
                <x-progress.circle :percent="50" color="gray" />
                <x-progress.circle :percent="50" color="zinc" />
                <x-progress.circle :percent="50" color="neutral" />
                <x-progress.circle :percent="50" color="stone" />
                <x-progress.circle :percent="50" color="red" />
                <x-progress.circle :percent="50" color="orange" />
                <x-progress.circle :percent="50" color="amber" />
                <x-progress.circle :percent="50" color="yellow" />
                <x-progress.circle :percent="50" color="lime" />
                <x-progress.circle :percent="50" color="green" />
                <x-progress.circle :percent="50" color="emerald" />
                <x-progress.circle :percent="50" color="teal" />
                <x-progress.circle :percent="50" color="cyan" />
                <x-progress.circle :percent="50" color="sky" />
                <x-progress.circle :percent="50" color="blue" />
                <x-progress.circle :percent="50" color="indigo" />
                <x-progress.circle :percent="50" color="violet" />
                <x-progress.circle :percent="50" color="purple" />
                <x-progress.circle :percent="50" color="fuchsia" />
                <x-progress.circle :percent="50" color="pink" />
                <x-progress.circle :percent="50" color="rose" />
                <x-progress.circle :percent="50" color="black" />
                <x-progress.circle :percent="50" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations" anchor="circle-light-variations">
        <x-preview language="blade" :contents="$circleLights">
            <div class="grid grid-cols-3 sm:grid-cols-5">
                <x-progress.circle :percent="50" light />
                <x-progress.circle :percent="50" color="secondary" light />
                <x-progress.circle :percent="50" color="slate" light />
                <x-progress.circle :percent="50" color="gray" light />
                <x-progress.circle :percent="50" color="zinc" light />
                <x-progress.circle :percent="50" color="neutral" light />
                <x-progress.circle :percent="50" color="stone" light />
                <x-progress.circle :percent="50" color="red" light />
                <x-progress.circle :percent="50" color="orange" light />
                <x-progress.circle :percent="50" color="amber" light />
                <x-progress.circle :percent="50" color="yellow" light />
                <x-progress.circle :percent="50" color="lime" light />
                <x-progress.circle :percent="50" color="green" light />
                <x-progress.circle :percent="50" color="emerald" light />
                <x-progress.circle :percent="50" color="teal" light />
                <x-progress.circle :percent="50" color="cyan" light />
                <x-progress.circle :percent="50" color="sky" light />
                <x-progress.circle :percent="50" color="blue" light />
                <x-progress.circle :percent="50" color="indigo" light />
                <x-progress.circle :percent="50" color="violet" light />
                <x-progress.circle :percent="50" color="purple" light />
                <x-progress.circle :percent="50" color="fuchsia" light />
                <x-progress.circle :percent="50" color="pink" light />
                <x-progress.circle :percent="50" color="rose" light />
                <x-progress.circle :percent="50" color="black" light />
                <x-progress.circle :percent="50" color="white" light />
            </div>
        </x-preview>
    </x-section>
</x-layout>
