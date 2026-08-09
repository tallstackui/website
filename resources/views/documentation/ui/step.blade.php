@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout
    :$content
    :ai="['Step' => 'step/main', 'Step Items' => 'step/items']"
>
    <x-slot:title>Step</x-slot>
    <x-slot:description>Step components.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Step\Step"
            title="Step"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-step selected="1" navigate>
                <x-step.items step="1">Step one...</x-step.items>
                <x-step.items step="2">Step two...</x-step.items>
                <x-step.items step="3">
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Title & Description">
        <x-preview language="blade" :contents="$titleDescription">
            <x-step selected="1" navigate>
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section
        title="Final Step"
        description="An option to mark the final step and not move forward."
    >
        <x-preview language="blade" :contents="$finalStep">
            <x-step selected="1" navigate>
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                    completed
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section
        title="Helpers"
        description="An option to disable navigation with clicks and use buttons."
    >
        <x-preview language="blade" :contents="$helpers">
            <x-step selected="1" helpers>
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section
        title="Allow Navigation Previous"
        description="An option to enable the navigation to the previous."
    >
        <x-preview language="blade" :contents="$navigatePrevious">
            <x-step selected="1" helpers navigate-previous>
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section
        title="Alternative Styles"
        description="An option to use other two different styles, totaling 3 styles."
    >
        <x-preview language="blade" :contents="$styles">
            <div class="space-y-2">
                <p class="dark:text-dark-300 text-lg font-medium text-pink-700">
                    Circles
                </p>
                <x-step selected="1" helpers circles>
                    <x-step.items
                        step="1"
                        title="Starting"
                        description="Step One"
                    >
                        Step one...
                    </x-step.items>
                    <x-step.items
                        step="2"
                        title="Advancing"
                        description="Step Two"
                    >
                        Step two...
                    </x-step.items>
                    <x-step.items
                        step="3"
                        title="Finishing"
                        description="Step Three"
                    >
                        Step three...
                        <b>finished!</b>
                    </x-step.items>
                </x-step>
                <p class="dark:text-dark-300 text-lg font-medium text-pink-700">
                    Panels
                </p>
                <x-step selected="1" helpers panels>
                    <x-step.items
                        step="1"
                        title="Starting"
                        description="Step One"
                    >
                        Step one...
                    </x-step.items>
                    <x-step.items
                        step="2"
                        title="Advancing"
                        description="Step Two"
                    >
                        Step two...
                    </x-step.items>
                    <x-step.items
                        step="3"
                        title="Finishing"
                        description="Step Three"
                    >
                        Step three...
                        <b>finished!</b>
                    </x-step.items>
                </x-step>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Finish Slot">
        <x-preview language="blade" :contents="$slot">
            <x-step selected="1" helpers>
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
                <x-slot:finish>
                    TallStackUI 🚀
                </x-slot>
            </x-step>
        </x-preview>
    </x-section>
    <x-section title="Wireable">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.ui.step />
        </x-preview>
    </x-section>
    <x-section title="Live Wireable">
        <x-preview language="blade" :contents="$liveWireable">
            <livewire:documentation.ui.step live />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-step
                selected="1"
                helpers
                x-on:change="alert(`Changed: ${$event.detail.step}`)"
                x-on:finish="alert(`Finished: ${$event.detail.step}`)"
            >
                <x-step.items step="1" title="Starting" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Advancing" description="Step Two">
                    Step two...
                </x-step.items>
                <x-step.items
                    step="3"
                    title="Finishing"
                    description="Step Three"
                    completed
                >
                    Step three...
                    <b>finished!</b>
                </x-step.items>
            </x-step>
        </x-preview>
    </x-section>
    <x-section
        title="Helper Variations"
        new
        description="helpers was a flag that produced one fixed pair of buttons. It behaves like the Table paginator now: a bare flag renders default, a string picks another look, and a dotted value is a view path. Anything else throws."
    >
        <x-preview language="blade" :contents="$helpersVariations">
            <div class="space-y-8">
                @foreach (["default", "minimal", "compact"] as $variant)
                    <x-step selected="2" :helpers="$variant" navigate-previous>
                        <x-step.items
                            step="1"
                            title="Starting"
                            :description="$variant"
                        >
                            Step one...
                        </x-step.items>
                        <x-step.items
                            step="2"
                            title="Advancing"
                            :description="$variant"
                        >
                            Step two...
                        </x-step.items>
                        <x-step.items
                            step="3"
                            title="Finishing"
                            :description="$variant"
                        >
                            Step three...
                            <b>finished!</b>
                        </x-step.items>
                    </x-step>
                @endforeach
            </div>
        </x-preview>
        <x-table
            class="mt-4"
            :headers="[
                ['index' => 'variant', 'label' => 'Variant'],
                ['index' => 'look', 'label' => 'Look'],
            ]"
            :rows="[
                ['variant' => 'default', 'look' => 'Individual bordered buttons with hover fill and focus ring, label plus chevron'],
                ['variant' => 'minimal', 'look' => 'The same layout with borderless text buttons'],
                ['variant' => 'compact', 'look' => 'A single shell anchored right, icon-only buttons and a current/total indicator'],
            ]"
        />
        <p class="mt-4">
            The variant behind a bare
            <x-block>helpers</x-block>
            comes from the config, so every wizard switches at once:
        </p>
        <x-code
            class="mt-4"
            language="php"
            :contents="$helpersConfiguration"
        />
        <x-warning class="mt-4">
            In
            <x-block>compact</x-block>
            the buttons disable at the edges instead of hiding, so the shell
            never changes width, and the finish button renders to the left of
            it.
        </x-warning>
    </x-section>
    <x-section
        title="Navigation Slots"
        new
        description="Each slot replaces its built-in button entirely. The component keeps only the visibility wrapper; the click behavior belongs to the application."
    >
        <x-preview language="blade" :contents="$navigationSlots">
            <x-step selected="1" helpers>
                <x-step.items step="1" title="Account" description="Step One">
                    Step one...
                </x-step.items>
                <x-step.items step="2" title="Review" description="Step Two">
                    Step two...
                </x-step.items>
                <x-slot:previous>
                    <x-button
                        color="secondary"
                        outline
                        icon="arrow-left"
                        x-on:click="previous()"
                    >
                        Back
                    </x-button>
                </x-slot>
                <x-slot:next>
                    <x-button
                        icon="arrow-right"
                        position="right"
                        x-on:click="next()"
                    >
                        Continue
                    </x-button>
                </x-slot>
            </x-step>
        </x-preview>
        <p class="mt-4">
            Two AlpineJS methods,
            <x-block>next()</x-block>
            and
            <x-block>previous()</x-block>
            , are exposed in the component scope: they move
            <x-block>selected</x-block>
            and dispatch the
            <x-block>change</x-block>
            event, so a custom button behaves exactly like the built-in one.
            Guarding is one expression away:
        </p>
        <x-code class="mt-4" language="blade" :contents="$navigationGuard" />
        <x-warning class="mt-4">
            A custom
            <x-block>previous</x-block>
            slot shows without requiring
            <x-block>navigate-previous</x-block>
            . Since they are slot names now, a stray bare
            <x-block>previous</x-block>
            or
            <x-block>next</x-block>
            attribute throws.
        </x-warning>
    </x-section>
    <x-section
        title="Skeleton"
        new
        description="A structural placeholder shaped like the step indicators. A bare flag draws 3; an integer sets the count."
    >
        <x-preview language="blade" :contents="$skeleton">
            <div class="space-y-6">
                <x-step skeleton />
                <x-step skeleton="4" circles />
            </div>
        </x-preview>
    </x-section>
</x-layout>
