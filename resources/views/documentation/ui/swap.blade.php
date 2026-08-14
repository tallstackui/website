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
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-swap :options="['Apple', 'Banana', 'Cherry']" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelAndHint">
            <x-swap
                label="Size"
                hint="Drag the value or use the arrows"
                :options="['Small', 'Medium', 'Large']"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Different Indexes"
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
        description="An option to allow you to preview the previous and next values."
    >
        <x-preview language="blade" :contents="$preview">
            <x-swap
                preview
                :options="['January', 'February', 'March', 'April', 'May']"
            />
        </x-preview>
    </x-section>
    <x-section title="Vertical">
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
            cannot be combined.
        </x-warning>
    </x-section>
    <x-section
        title="Block"
        description="An option to display the component using the full width."
    >
        <x-preview language="blade" :contents="$block">
            <x-swap
                block
                :options="['Daily', 'Weekly', 'Monthly', 'Yearly']"
            />
        </x-preview>
    </x-section>
    <x-section title="Loop">
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
        description="Both freeze the buttons, the drag and the keyboard. disabled also dims the control, while readonly keeps the resting look."
    >
        <x-preview language="blade" :contents="$readonlyAndDisabled">
            <div class="flex flex-wrap items-center gap-6">
                <x-swap readonly :options="['Apple', 'Banana', 'Cherry']" />
                <x-swap disabled :options="['Apple', 'Banana', 'Cherry']" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Tooltip">
        <x-preview language="blade" :contents="$tooltip">
            <x-swap
                tooltip="Pick the plan billing cycle"
                :options="['Monthly', 'Quarterly', 'Yearly']"
            />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-swap
                    :options="['Apple', 'Banana', 'Cherry']"
                    x-on:swap="alert(`Swapped: ${JSON.stringify($event.detail)}`)"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'swap', 'detail' => '{ value, label, index, direction }', 'fired' => 'The option changes'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Without Livewire">
        <x-code language="blade" :contents="$withoutLivewire" />
    </x-section>
    <x-section title="AlpineJS Helper">
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
</x-layout>
