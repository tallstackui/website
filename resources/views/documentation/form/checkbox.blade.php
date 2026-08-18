@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $features = [
        ["label" => "Newsletter", "value" => "newsletter", "description" => "Weekly digest"],
        ["label" => "Alerts", "value" => "alerts", "description" => "Real time notifications"],
        ["label" => "Reports", "value" => "reports", "description" => "Monthly summary"],
    ];
@endphp

<x-layout
    :$content
    :ai="['Checkbox' => 'form/checkbox', 'Checkbox Group' => 'form/checkbox/group']"
>
    <x-slot:title>Form Checkbox</x-slot>
    <x-slot:description>Form checkbox component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\Checkbox"
            title="Checkbox"
        />
        <livewire:customization
            :customization="$groupCustomization"
            component="Form\Checkbox\Group"
            title="Checkbox Group"
        />
    </x-slot>
    <x-section title="Basic Usage" anchor="checkbox-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <x-checkbox />
        </x-preview>
    </x-section>
    <x-section title="Label" anchor="checkbox-label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-checkbox label="Receive Alert" />
                <x-checkbox label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled" anchor="checkbox-readonly-disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-checkbox label="Readonly" checked readonly />
                <x-checkbox label="Disabled" checked disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot" anchor="checkbox-label-slot">
        <x-preview language="blade" :contents="$html">
            <x-checkbox>
                <x-slot:label>
                    I agree to the terms and conditions
                </x-slot>
            </x-checkbox>
        </x-preview>
    </x-section>
    <x-section title="Label Slot at Left" anchor="checkbox-label-slot-at-left">
        <x-preview language="blade" :contents="$labelLeft">
            <x-checkbox>
                <x-slot:label left>
                    I agree to the terms and conditions
                </x-slot>
            </x-checkbox>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment" anchor="checkbox-label-alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-checkbox>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </x-slot>
                </x-checkbox>
                <x-checkbox>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </x-slot>
                </x-checkbox>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="checkbox-size-variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-checkbox xs />
                <x-checkbox sm />
                <x-checkbox md />
                <x-checkbox lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="checkbox-color-variations">
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
    <x-separator text="Checkbox Group" />
    <x-section title="Basic Usage" anchor="group-basic-usage">
        <x-preview language="blade" :contents="$groupBasic">
            <x-checkbox.group
                name="features-basic[]"
                label="Features"
                :options="$features"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Variations"
        anchor="group-variations"
        description="An option to display the group in different formats."
    >
        <x-preview language="blade" :contents="$groupVariations">
            <div class="space-y-6">
                <x-checkbox.group
                    name="features-list[]"
                    list
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-card[]"
                    card
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-panel[]"
                    panel
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-inline[]"
                    inline
                    :options="$features"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Columns" anchor="group-columns">
        <x-preview language="blade" :contents="$groupColumns">
            <x-checkbox.group
                name="features-columns[]"
                card
                :columns="3"
                :options="$features"
            />
        </x-preview>
    </x-section>
    <x-section title="Control Position" anchor="group-control-position">
        <x-preview language="blade" :contents="$groupPosition">
            <x-checkbox.group
                name="features-position[]"
                position="right"
                :options="$features"
            />
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="group-size-variations">
        <x-preview language="blade" :contents="$groupSizes">
            <div class="space-y-6">
                <x-checkbox.group
                    name="features-xs[]"
                    xs
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-sm[]"
                    sm
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-md[]"
                    md
                    :options="$features"
                />
                <x-checkbox.group
                    name="features-lg[]"
                    lg
                    :options="$features"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Colors" anchor="group-colors">
        <x-preview language="blade" :contents="$groupColors">
            <x-checkbox.group
                name="features-color[]"
                color="green"
                :value="['alerts']"
                :options="$features"
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
            <x-checkbox.group
                name="features-select[]"
                select="label:name|value:id|description:note"
                :options="[
                    ['name' => 'Newsletter', 'id' => 'newsletter', 'note' => 'Product updates once a month'],
                    ['name' => 'Reports', 'id' => 'reports', 'note' => 'A weekly digest of your metrics'],
                    ['name' => 'Alerts', 'id' => 'alerts', 'note' => 'Only when something breaks'],
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
            <x-checkbox.group
                name="addons-interact[]"
                card
                :columns="2"
                :options="[
                    ['label' => 'Extra storage', 'value' => 'storage', 'name' => 'Extra storage', 'price' => 9],
                    ['label' => 'Priority support', 'value' => 'support', 'name' => 'Priority support', 'price' => 29],
                ]"
            >
                @interact("option", $option)
                    <span class="font-semibold">{{ $option["name"] }}</span>
                    <span class="font-mono">${{ $option["price"] }}</span>
                @endinteract
            </x-checkbox.group>
        </x-preview>
    </x-section>
</x-layout>
