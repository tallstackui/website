@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;

    $plans = [
        ['label' => 'Startup', 'value' => 'startup', 'description' => 'Up to 5 job postings', 'aside' => '$29 / mo'],
        ['label' => 'Business', 'value' => 'business', 'description' => 'Up to 25 job postings', 'aside' => '$99 / mo'],
        ['label' => 'Enterprise', 'value' => 'enterprise', 'description' => 'Unlimited', 'aside' => '$249 / mo'],
    ];

    $periods = [
        ['label' => 'Monthly', 'value' => 'monthly'],
        ['label' => 'Yearly', 'value' => 'yearly'],
    ];
@endphp

<x-layout :$content :ai="['Radio' => 'form/radio', 'Radio Group' => 'form/radio/group']">
    <x-slot:title>
        Form Radio
    </x-slot:title>
    <x-slot:description>
        Form radio component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Radio" title="Radio" />
        <livewire:customization :customization="$groupCustomization" component="Form\Radio\Group" title="Radio Group" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-radio />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-radio label="Receive Alert" />
                <x-radio label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot">
        <x-preview language="blade" :contents="$html">
            <x-radio>
                <x-slot:label>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-radio>
        </x-preview>
    </x-section>
    <x-section title="Label Slot at Left" new description="left places the label before the input.">
        <x-preview language="blade" :contents="$labelLeft">
            <x-radio>
                <x-slot:label left>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-radio>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-radio>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-radio>
                <x-radio>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-radio>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-radio xs />
                <x-radio sm />
                <x-radio md />
                <x-radio lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
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
    <x-section title="Group Concept" new disable-copy>
        <x-block>&lt;x-radio.group&gt;</x-block> renders a whole set of options from an array, in one of four
        presentations. The selected state is pure CSS, through the <x-block>has-checked</x-block> and
        <x-block>group-has-checked</x-block> variants, so no AlpineJS is involved and a round trip cannot desynchronize
        the highlight from the checked input.
    </x-section>
    <x-section title="Group Basic Usage" new>
        <x-preview language="blade" :contents="$groupBasic">
            <x-radio.group name="plan-basic" label="Plan" :options="$plans" />
        </x-preview>
    </x-section>
    <x-section title="Group Variations" new description="Each presentation is a flag, not a value. Passing none renders list; passing more than one resolves to the first of card, panel, inline.">
        <x-preview language="blade" :contents="$groupVariations">
            <div class="space-y-6">
                <x-radio.group name="plan-list" list :options="$plans" />
                <x-radio.group name="plan-card" card :options="$plans" />
                <x-radio.group name="plan-panel" panel :options="$plans" />
                <x-radio.group name="period-inline" inline :options="$periods" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Group Columns" new description="Between 1 and 4, on card and panel only.">
        <x-preview language="blade" :contents="$groupColumns">
            <x-radio.group name="plan-columns" card :columns="2" :options="$plans" />
        </x-preview>
    </x-section>
    <x-section title="Group Control Position" new description="Control side on list and card: left or right.">
        <x-preview language="blade" :contents="$groupPosition">
            <x-radio.group name="plan-position" position="right" :options="$plans" />
        </x-preview>
    </x-section>
    <x-section title="Group Size Variations" new>
        <x-preview language="blade" :contents="$groupSizes">
            <div class="space-y-6">
                <x-radio.group name="plan-xs" xs :options="$periods" />
                <x-radio.group name="plan-sm" sm :options="$periods" />
                <x-radio.group name="plan-md" md :options="$periods" />
                <x-radio.group name="plan-lg" lg :options="$periods" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Group Colors" new description="The color drives the border, background and text of the selected option, the fill of a selected inline segment, and the control itself.">
        <x-preview language="blade" :contents="$groupColors">
            <x-radio.group name="plan-color" color="green" value="business" :options="$plans" />
        </x-preview>
    </x-section>
    <x-section title="Group Option Keys" new description="image wins over icon when both are present. A missing label or value throws.">
        <x-table :headers="[
            ['index' => 'key', 'label' => 'Key'],
            ['index' => 'type', 'label' => 'Type'],
            ['index' => 'required', 'label' => 'Required'],
            ['index' => 'ignored', 'label' => 'Ignored by'],
        ]" :rows="[
            ['key' => 'label', 'type' => 'string', 'required' => 'Yes', 'ignored' => '—'],
            ['key' => 'value', 'type' => 'scalar', 'required' => 'Yes', 'ignored' => '—'],
            ['key' => 'description', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
            ['key' => 'aside', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
            ['key' => 'icon', 'type' => 'string', 'required' => 'No', 'ignored' => '—'],
            ['key' => 'image', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
            ['key' => 'badge', 'type' => 'string', 'required' => 'No', 'ignored' => 'inline'],
            ['key' => 'disabled', 'type' => 'bool', 'required' => 'No', 'ignored' => '—'],
        ]">
            @interact('column_key', $row)
                <x-block>{{ $row['key'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Group Select" new description="Remaps the source keys with the same syntax used by select.styled. Anything left out falls back to the key of the same name.">
        <x-code language="blade" :contents="$groupSelect" />
    </x-section>
    <x-section title="Group Interact" new description="Replaces the body of every item. The label, the input and the selected-state classes stay owned by the component, and the closure still sees the original keys.">
        <x-code language="blade" :contents="$groupInteract" />
    </x-section>
    <x-section title="Group Without Livewire" new description="Every input shares the same name. Without it, the name falls back to id and then to the bound property.">
        <x-preview language="blade" :contents="$groupNative">
            <x-radio.group name="plan-native" value="business" :options="$plans" />
        </x-preview>
    </x-section>
</x-layout>
