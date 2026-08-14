@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/input-select">
    <x-slot:title>Input Select</x-slot>
    <x-slot:description>Input select component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\InputSelect"
            title="Form Input Select"
        />
    </x-slot>
    <x-section title="Concept" disable-copy>
        The input select component is a combination of the normal input
        component with
        <x-block>select.native</x-block>
        or
        <x-block>select.styled</x-block>
        components. This combination allows you to create more complex and
        feature-rich select inputs, with the possibility of adding icons,
        prefixes, suffixes, hints and more. All available options of each
        component are still available when using the Input Select component, so
        you can mix and match the features of both components to create the
        perfect select input for your application.
        <x-warning class="mt-4">
            One of the position is mandatory for the input select component,
            either left or right.
        </x-warning>
    </x-section>
    <x-section title="Select Native">
        <x-preview language="blade" :contents="$native">
            <x-input.select label="Phone Number" icon="phone" clearable>
                <x-slot:left>
                    <x-select.native :options="['+1', '+44', '+55', '+91']" />
                </x-slot>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Select Styled" anchor="styled-left-addon">
        <x-preview language="blade" :contents="$styled">
            <x-input.select label="E-mail Provider" icon="envelope" clearable>
                <x-slot:right>
                    <x-select.styled
                        :options="['@gmail.com', '@yahoo.com', '@outlook.com']"
                    />
                </x-slot>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-input.select label="Readonly" value="555-0100" readonly>
                    <x-slot:left>
                        <x-select.native :options="['+1', '+44']" readonly />
                    </x-slot>
                </x-input.select>
                <x-input.select label="Disabled" value="555-0100" disabled>
                    <x-slot:right>
                        <x-select.native :options="['+1', '+44']" />
                    </x-slot>
                </x-input.select>
                <x-input.select label="Readonly" value="555-0100" readonly>
                    <x-slot:left>
                        <x-select.styled value="+1" :options="['+1', '+44']" />
                    </x-slot>
                </x-input.select>
                <x-input.select label="Disabled" value="555-0100" disabled>
                    <x-slot:right>
                        <x-select.styled value="+1" :options="['+1', '+44']" />
                    </x-slot>
                </x-input.select>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Panel Width"
        description="An option to control the width of the floating."
    >
        <x-preview language="blade" :contents="$floating">
            <x-input.select label="E-mail Provider" floating="min-w-40">
                <x-slot:right>
                    <x-select.styled
                        :options="['@gmail.com', '@yahoo.com', '@outlook.com']"
                    />
                </x-slot>
            </x-input.select>
        </x-preview>
        <x-warning class="mt-4">
            The value is a class string, so it can carry more than one class (
            <x-block>min-w-40 max-w-56</x-block>
            ). The width sync stays on and the panel never sits below the
            trigger's width, which makes the value a floor or a cap, not an
            exact width.
        </x-warning>
    </x-section>
</x-layout>
