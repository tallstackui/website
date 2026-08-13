@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $plans = [
        ["label" => "Startup", "value" => "startup", "description" => "Up to 5 job postings", "aside" => '$29 / mo'],
        ["label" => "Business", "value" => "business", "description" => "Up to 25 job postings", "aside" => '$99 / mo'],
        ["label" => "Enterprise", "value" => "enterprise", "description" => "Unlimited", "aside" => '$249 / mo'],
    ];

    $periods = [["label" => "Monthly", "value" => "monthly"], ["label" => "Yearly", "value" => "yearly"]];
@endphp

<x-layout
    :$content
    :ai="['Radio' => 'form/radio', 'Radio Group' => 'form/radio/group']"
>
    <x-slot:title>Form Radio</x-slot>
    <x-slot:description>Form radio component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\Radio"
            title="Radio"
        />
        <livewire:customization
            :customization="$groupCustomization"
            component="Form\Radio\Group"
            title="Radio Group"
        />
    </x-slot>
    <x-section title="Basic Usage" anchor="radio-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <x-radio />
        </x-preview>
    </x-section>
    <x-section title="Label" anchor="radio-label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-radio label="Receive Alert" />
                <x-radio label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled" anchor="radio-readonly-disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-radio label="Readonly" checked readonly />
                <x-radio label="Disabled" checked disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot" anchor="radio-label-slot">
        <x-preview language="blade" :contents="$html">
            <x-radio>
                <x-slot:label>
                    I agree to the
                    <a href="#">terms and conditions</a>
                </x-slot>
            </x-radio>
        </x-preview>
    </x-section>
    <x-section
        title="Label Slot at Left"
        anchor="radio-label-slot-at-left"
        new
        description="left places the label before the input."
    >
        <x-preview language="blade" :contents="$labelLeft">
            <x-radio>
                <x-slot:label left>
                    I agree to the
                    <a href="#">terms and conditions</a>
                </x-slot>
            </x-radio>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment" anchor="radio-label-alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-radio>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </x-slot>
                </x-radio>
                <x-radio>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </x-slot>
                </x-radio>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="radio-size-variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-radio xs />
                <x-radio sm />
                <x-radio md />
                <x-radio lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="radio-color-variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-radio label="Primary" checked />
                <x-radio color="secondary" label="Secondary" checked />
                <x-radio color="slate" label="Slate" checked />
                <x-radio color="gray" label="Gray" checked />
                <x-radio color="zinc" label="Zinc" checked />
                <x-radio color="neutral" label="Neutral" checked />
                <x-radio color="stone" label="Stone" checked />
                <x-radio color="red" label="Red" checked />
                <x-radio color="orange" label="Orange" checked />
                <x-radio color="amber" label="Amber" checked />
                <x-radio color="yellow" label="Yellow" checked />
                <x-radio color="lime" label="Lime" checked />
                <x-radio color="green" label="Green" checked />
                <x-radio color="emerald" label="Emerald" checked />
                <x-radio color="teal" label="Teal" checked />
                <x-radio color="cyan" label="Cyan" checked />
                <x-radio color="sky" label="Sky" checked />
                <x-radio color="blue" label="Blue" checked />
                <x-radio color="indigo" label="Indigo" checked />
                <x-radio color="violet" label="Violet" checked />
                <x-radio color="purple" label="Purple" checked />
                <x-radio color="fuchsia" label="Fuchsia" checked />
                <x-radio color="pink" label="Pink" checked />
                <x-radio color="rose" label="Rose" checked />
                <x-radio color="mauve" label="Mauve" checked />
                <x-radio color="olive" label="Olive" checked />
                <x-radio color="mist" label="Mist" checked />
                <x-radio color="taupe" label="Taupe" checked />
                <x-radio color="black" label="Black" checked />
            </div>
        </x-preview>
    </x-section>
    <x-separator text="Radio Group" />
    <x-section title="Basic Usage" anchor="group-basic-usage" new>
        <x-preview language="blade" :contents="$groupBasic">
            <x-radio.group name="plan-basic" label="Plan" :options="$plans" />
        </x-preview>
    </x-section>
    <x-section
        title="Variations"
        anchor="group-variations"
        description="An option to display the group in different formats."
    >
        <x-preview language="blade" :contents="$groupVariations">
            <div class="space-y-6">
                <x-radio.group name="plan-list" list :options="$plans" />
                <x-radio.group name="plan-card" card :options="$plans" />
                <x-radio.group name="plan-panel" panel :options="$plans" />
                <x-radio.group
                    name="period-inline"
                    inline
                    :options="$periods"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Columns" anchor="group-columns">
        <x-preview language="blade" :contents="$groupColumns">
            <x-radio.group
                name="plan-columns"
                card
                :columns="3"
                :options="$plans"
            />
        </x-preview>
    </x-section>
    <x-section title="Control Position" anchor="group-control-position">
        <x-preview language="blade" :contents="$groupPosition">
            <x-radio.group
                name="plan-position"
                position="right"
                :options="$plans"
            />
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="group-size-variations">
        <x-preview language="blade" :contents="$groupSizes">
            <div class="space-y-6">
                <x-radio.group name="plan-xs" xs :options="$periods" />
                <x-radio.group name="plan-sm" sm :options="$periods" />
                <x-radio.group name="plan-md" md :options="$periods" />
                <x-radio.group name="plan-lg" lg :options="$periods" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Colors" anchor="group-colors">
        <x-preview language="blade" :contents="$groupColors">
            <x-radio.group
                name="plan-color"
                color="green"
                value="business"
                :options="$plans"
            />
        </x-preview>
    </x-section>
    <x-section title="Option Keys" anchor="group-option-keys">
        <x-table
            :headers="[
                ['index' => 'key', 'label' => 'Key'],
                ['index' => 'type', 'label' => 'Type'],
                ['index' => 'required', 'label' => 'Required'],
                ['index' => 'ignored', 'label' => 'Ignored by'],
            ]"
            :rows="[
                ['key' => 'label', 'type' => 'string', 'required' => 'Yes', 'ignored' => '—'],
                ['key' => 'value', 'type' => 'scalar', 'required' => 'Yes', 'ignored' => '—'],
                ['key' => 'description', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
                ['key' => 'aside', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
                ['key' => 'icon', 'type' => 'string', 'required' => 'No', 'ignored' => '—'],
                ['key' => 'image', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
                ['key' => 'badge', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
                ['key' => 'disabled', 'type' => 'bool', 'required' => 'No', 'ignored' => '—'],
            ]"
        >
            @interact("column_key", $row)
                <x-block>{{ $row["key"] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section
        title="Select"
        anchor="group-select"
        description="An option to remaps the source keys with the same syntax used by select styled."
    >
        <x-preview language="blade" :contents="$groupSelect">
            <x-radio.group
                name="plan-select"
                select="label:name|value:id|description:note"
                :options="[
                    ['name' => 'Startup', 'id' => 'startup', 'note' => 'Up to 5 job postings'],
                    ['name' => 'Business', 'id' => 'business', 'note' => 'Up to 25 job postings'],
                    ['name' => 'Enterprise', 'id' => 'enterprise', 'note' => 'Unlimited'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Interact"
        anchor="group-interact"
        description="An option to replaces the body of every item."
    >
        <x-preview language="blade" :contents="$groupInteract">
            <x-radio.group
                name="plan-interact"
                card
                :columns="2"
                :options="[
                    ['label' => 'Startup', 'value' => 'startup', 'tag' => 'popular'],
                    ['label' => 'Business', 'value' => 'business', 'tag' => 'best value'],
                ]"
            >
                @interact("option", $option)
                    <div class="flex items-center justify-between">
                        <span class="font-medium">{{ $option["label"] }}</span>
                        <x-badge
                            :text="$option['tag']"
                            color="green"
                            round
                            sm
                        />
                    </div>
                @endinteract
            </x-radio.group>
        </x-preview>
    </x-section>
</x-layout>
