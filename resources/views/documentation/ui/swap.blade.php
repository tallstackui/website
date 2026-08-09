@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="swap">
    <x-slot:title>Swap</x-slot>
    <x-slot:description>Swap component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Swap" />
    </x-slot>
    <x-section title="Concept" new disable-copy>
        A compact value cycler shaped like an input: a chevron button on each
        side, the selected value in the middle. The value moves through the
        buttons, through a drag over the value itself — pointer events, so mouse
        and touch behave identically — or through the keyboard arrows while
        either button holds focus. The middle is deliberately not focusable:
        <x-block>Tab</x-block>
        stops only on the buttons.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-swap :options="['Apple', 'Banana', 'Cherry']" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint" new>
        <x-preview language="blade" :contents="$labelAndHint">
            <x-swap
                label="Size"
                hint="Drag the value or use the arrows"
                :options="['Small', 'Medium', 'Large']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Options"
        new
        description="Flat arrays, Collections and dimensional arrays are all accepted. The model always carries the option value, never the index."
    >
        <x-preview language="blade" :contents="$options">
            <div class="flex flex-wrap items-center gap-6">
                <x-swap :options="['Apple', 'Banana', 'Cherry']" />
                <x-swap :options="collect(['Apple', 'Banana', 'Cherry'])" />
                <x-swap
                    :options="[
                        ['label' => 'Small', 'value' => 1],
                        ['label' => 'Medium', 'value' => 2],
                        ['label' => 'Large', 'value' => 3],
                    ]"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Different Indexes"
        new
        description="Dimensional keys are remapped through the same select string the styled select uses."
    >
        <x-preview language="blade" :contents="$select">
            <x-swap
                :options="[
                    ['name' => 'Small', 'id' => 1],
                    ['name' => 'Medium', 'id' => 2],
                    ['name' => 'Large', 'id' => 3],
                ]"
                select="label:name|value:id"
            />
        </x-preview>
        <x-warning class="mt-4">
            A dimensional option missing the resolved
            <x-block>label</x-block>
            or
            <x-block>value</x-block>
            key throws.
        </x-warning>
    </x-section>
    <x-section
        title="Preview"
        new
        description="Widens the component and splits the viewport in thirds: the previous and next options stay visible whole at reduced opacity, fading toward the edges through a CSS mask."
    >
        <x-preview language="blade" :contents="$preview">
            <x-swap
                preview
                :options="['January', 'February', 'March', 'April', 'May']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Vertical"
        new
        description="Rolls the value top-to-bottom instead. The chevrons become up and down, and the drag axis follows."
    >
        <x-preview language="blade" :contents="$vertical">
            <x-swap
                vertical
                :options="['Monday', 'Tuesday', 'Wednesday', 'Thursday']"
            />
        </x-preview>
        <x-warning class="mt-4">
            <x-block>preview</x-block>
            and
            <x-block>vertical</x-block>
            cannot be combined, because sideways slices make no sense on a
            vertical roll. The render throws.
        </x-warning>
    </x-section>
    <x-section
        title="Block"
        new
        description="Stretches the control to the full width of the parent."
    >
        <x-preview language="blade" :contents="$block">
            <x-swap
                block
                :options="['Daily', 'Weekly', 'Monthly', 'Yearly']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Loop"
        new
        description="Navigation loops by default: crossing an edge animates into a clone of the opposite end and silently teleports to the real option, so the cycle reads as continuous."
    >
        <x-preview language="blade" :contents="$loop">
            <div class="flex flex-wrap items-center gap-6">
                <x-swap :options="['One', 'Two', 'Three']" />
                <x-swap :loop="false" :options="['One', 'Two', 'Three']" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            With
            <x-block>:loop="false"</x-block>
            the matching button disables at either end and the drag gains rubber
            band resistance past them.
        </x-warning>
    </x-section>
    <x-section
        title="Readonly & Disabled"
        new
        description="Both freeze the buttons, the drag and the keyboard. disabled also dims the control, while readonly keeps the resting look."
    >
        <x-preview language="blade" :contents="$readonlyAndDisabled">
            <div class="flex flex-wrap items-center gap-6">
                <x-swap readonly :options="['Apple', 'Banana', 'Cherry']" />
                <x-swap disabled :options="['Apple', 'Banana', 'Cherry']" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Tooltip" new>
        <x-preview language="blade" :contents="$tooltip">
            <x-swap
                tooltip="Pick the plan billing cycle"
                :options="['Monthly', 'Quarterly', 'Yearly']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Events"
        new
        description="Every navigation dispatches a swap CustomEvent carrying value, label, index and direction, where direction is next or prev."
    >
        <x-preview language="blade" :contents="$events">
            <x-swap
                :options="['Apple', 'Banana', 'Cherry']"
                x-on:swap="alert(`Swapped: ${JSON.stringify($event.detail)}`)"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Livewire Integration"
        new
        description="wire:model carries the option value. A null model shows the first option without writing anything back until the user navigates."
    >
        <x-preview language="blade" :contents="$livewire">
            <livewire:documentation.ui.swap :mode="1" />
        </x-preview>
    </x-section>
    <x-section title="Livewire Integration, Different Indexes" new>
        <x-preview>
            <livewire:documentation.ui.swap :mode="2" />
        </x-preview>
    </x-section>
    <x-section
        title="Livewire Integration, wire:change"
        new
        description="Compiles the same way as the other form components: the method is called with the new value."
    >
        <x-preview>
            <livewire:documentation.ui.swap :mode="3" />
        </x-preview>
    </x-section>
    <x-section
        title="Without Livewire"
        new
        description="Outside Livewire the component keeps a hidden input in sync through name, so a plain form submit carries the value."
    >
        <x-code language="blade" :contents="$withoutLivewire" />
    </x-section>
    <x-section
        title="AlpineJS Helper"
        new
        description="The component pairs with x-model through x-modelable."
    >
        <x-preview language="blade" :contents="$alpine">
            <div
                x-data="{ cycle: 'Monthly' }"
                class="flex items-center gap-4"
            >
                <x-swap
                    x-model="cycle"
                    :options="['Monthly', 'Quarterly', 'Yearly']"
                />
                <span
                    class="dark:text-dark-400 text-sm text-gray-500"
                    x-text="cycle"
                ></span>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Configuration"
        new
        description="The three flags also exist as global defaults. The inline prop always wins."
    >
        <x-code language="php" :contents="$configuration" />
    </x-section>
    <x-section title="Motion" new disable-copy>
        The track slides on
        <x-block>transform</x-block>
        inside an overflow viewport, 300ms ease-out by default, degrading to an
        instant jump under
        <x-block>globals()->flash()</x-block>
        . During a drag the transition is suspended so the value follows the
        pointer 1:1 — a long gesture crosses several options — and the release
        snaps to the nearest one.
    </x-section>
    <x-section title="Exceptions" new>
        <x-code language="blade" :contents="$exception" />
    </x-section>
</x-layout>
