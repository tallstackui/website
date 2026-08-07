@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;

    $features = [
        ['label' => 'Newsletter', 'value' => 'newsletter', 'description' => 'Weekly digest'],
        ['label' => 'Alerts', 'value' => 'alerts', 'description' => 'Real time notifications'],
        ['label' => 'Reports', 'value' => 'reports', 'description' => 'Monthly summary'],
    ];
@endphp

<x-layout :$content :ai="['Checkbox' => 'form/checkbox', 'Checkbox Group' => 'form/checkbox/group']">
    <x-slot:title>
        Form Checkbox
    </x-slot:title>
    <x-slot:description>
        Form checkbox component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Checkbox" title="Checkbox" />
        <livewire:customization :customization="$groupCustomization" component="Form\Checkbox\Group" title="Checkbox Group" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-checkbox />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-checkbox label="Receive Alert" />
                <x-checkbox label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot">
        <x-preview language="blade" :contents="$html">
            <x-checkbox>
                <x-slot:label>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-checkbox>
        </x-preview>
    </x-section>
    <x-section title="Label Slot at Left" new description="left places the label before the input.">
        <x-preview language="blade" :contents="$labelLeft">
            <x-checkbox>
                <x-slot:label left>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-checkbox>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-checkbox>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-checkbox>
                <x-checkbox>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-checkbox>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-checkbox xs />
                <x-checkbox sm />
                <x-checkbox md />
                <x-checkbox lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-checkbox label="Primary" checked />
                <x-checkbox color="secondary" label="Secondary" checked />
                <x-checkbox color="slate" label="Slate" checked />
                <x-checkbox color="gray" label="Gray" checked />
                <x-checkbox color="zinc" label="Zinc" checked />
                <x-checkbox color="neutral" label="Neutral" checked />
                <x-checkbox color="stone" label="Stone" checked />
                <x-checkbox color="red" label="Red" checked />
                <x-checkbox color="orange" label="Orange" checked />
                <x-checkbox color="amber" label="Amber" checked />
                <x-checkbox color="yellow" label="Yellow" checked />
                <x-checkbox color="lime" label="Lime" checked />
                <x-checkbox color="green" label="Green" checked />
                <x-checkbox color="emerald" label="Emerald" checked />
                <x-checkbox color="teal" label="Teal" checked />
                <x-checkbox color="cyan" label="Cyan" checked />
                <x-checkbox color="sky" label="Sky" checked />
                <x-checkbox color="blue" label="Blue" checked />
                <x-checkbox color="indigo" label="Indigo" checked />
                <x-checkbox color="violet" label="Violet" checked />
                <x-checkbox color="purple" label="Purple" checked />
                <x-checkbox color="fuchsia" label="Fuchsia" checked />
                <x-checkbox color="pink" label="Pink" checked />
                <x-checkbox color="rose" label="Rose" checked />
                <x-checkbox color="mauve" label="Mauve" checked />
                <x-checkbox color="olive" label="Olive" checked />
                <x-checkbox color="mist" label="Mist" checked />
                <x-checkbox color="taupe" label="Taupe" checked />
                <x-checkbox color="black" label="Black" checked />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Group Concept" new disable-copy>
        <x-block>&lt;x-checkbox.group&gt;</x-block> renders a whole set of options from an array, in one of four
        presentations. The selected state is pure CSS, through the <x-block>has-checked</x-block> and
        <x-block>group-has-checked</x-block> variants, so no AlpineJS is involved and a round trip cannot desynchronize
        the highlight from the checked input. The bound property must be an array.
    </x-section>
    <x-section title="Group Basic Usage" new>
        <x-preview language="blade" :contents="$groupBasic">
            <x-checkbox.group name="features-basic[]" label="Features" :options="$features" />
        </x-preview>
        <x-code class="mt-4" language="php" :contents="$groupProperty" />
    </x-section>
    <x-section title="Group Variations" new description="Each presentation is a flag, not a value. Passing none renders list; passing more than one resolves to the first of card, panel, inline.">
        <x-preview language="blade" :contents="$groupVariations">
            <div class="space-y-6">
                <x-checkbox.group name="features-list[]" list :options="$features" />
                <x-checkbox.group name="features-card[]" card :options="$features" />
                <x-checkbox.group name="features-panel[]" panel :options="$features" />
                <x-checkbox.group name="features-inline[]" inline :options="$features" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Group Columns" new description="Between 1 and 4, on card and panel only.">
        <x-preview language="blade" :contents="$groupColumns">
            <x-checkbox.group name="features-columns[]" card :columns="2" :options="$features" />
        </x-preview>
    </x-section>
    <x-section title="Group Control Position" new description="Control side on list and card: left or right.">
        <x-preview language="blade" :contents="$groupPosition">
            <x-checkbox.group name="features-position[]" position="right" :options="$features" />
        </x-preview>
    </x-section>
    <x-section title="Group Size Variations" new>
        <x-preview language="blade" :contents="$groupSizes">
            <div class="space-y-6">
                <x-checkbox.group name="features-xs[]" xs :options="$features" />
                <x-checkbox.group name="features-sm[]" sm :options="$features" />
                <x-checkbox.group name="features-md[]" md :options="$features" />
                <x-checkbox.group name="features-lg[]" lg :options="$features" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Group Colors" new description="The color drives the border, background and text of the selected option, the fill of a selected inline segment, and the control itself.">
        <x-preview language="blade" :contents="$groupColors">
            <x-checkbox.group name="features-color[]" color="green" :value="['alerts']" :options="$features" />
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
    <x-section title="Group Without Livewire" new description="Every input shares the same name, always suffixed with [] so a plain form collects the options as an array.">
        <x-preview language="blade" :contents="$groupNative">
            <x-checkbox.group name="features-native[]" :value="['newsletter', 'reports']" :options="$features" />
        </x-preview>
        <x-warning warning title="required behaves differently here" class="mt-4">
            On the checkbox group it only marks the legend. The native attribute is never set on the inputs, since the
            browser would then demand every box be ticked.
        </x-warning>
    </x-section>
</x-layout>
