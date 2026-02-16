@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Input Select
    </x-slot:title>
    <x-slot:description>
        Input select component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\InputSelect" title="Form Input Select" />
    </x-slot:customization>
    <x-section title="Basic Usage" anchor="overview-basic-usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-input.select label="Phone Number" icon="phone">
                <x-slot:left>
                    <x-select.styled :options="['+1', '+44', '+55', '+91']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
    {{-- Native Select --}}
    <x-separator text="With Native Select" />
    <x-section title="Left Addon" anchor="native-left-addon">
        <x-preview language="blade" :contents="$nativeLeft">
            <x-input.select label="Phone Number" icon="phone">
                <x-slot:left>
                    <x-select.native :options="['+1', '+44', '+55', '+91']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Right Addon" anchor="native-right-addon">
        <x-preview language="blade" :contents="$nativeRight">
            <x-input.select label="E-mail">
                <x-slot:right>
                    <x-select.native :options="['@gmail.com', '@yahoo.com', '@outlook.com']" side="right" />
                </x-slot:right>
            </x-input.select>
        </x-preview>
    </x-section>
    {{-- Styled Select --}}
    <x-separator text="With Styled Select" />
    <x-section title="Left Addon" anchor="styled-left-addon">
        <x-preview language="blade" :contents="$styledLeft">
            <x-input.select label="Phone Number" icon="phone">
                <x-slot:left>
                    <x-select.styled :options="['+1', '+44', '+55', '+91']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Right Addon" anchor="styled-right-addon">
        <x-preview language="blade" :contents="$styledRight">
            <x-input.select label="Amount" clearable>
                <x-slot:right>
                    <x-select.styled :options="['USD', 'EUR', 'BRL', 'GBP']" side="right" />
                </x-slot:right>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Searchable" anchor="styled-searchable">
        <div class="space-y-4">
            <p>
                When using <x-block>select.styled</x-block>, you can enable the <x-block>searchable</x-block> attribute
                to allow filtering options by typing — useful when the select has many items:
            </p>
            <x-preview language="blade" :contents="$styledSearchable">
                <x-input.select label="Phone Number" icon="phone">
                    <x-slot:left>
                        <x-select.styled :options="[
                            ['label' => '🇺🇸 +1', 'value' => '+1'],
                            ['label' => '🇬🇧 +44', 'value' => '+44'],
                            ['label' => '🇧🇷 +55', 'value' => '+55'],
                            ['label' => '🇮🇳 +91', 'value' => '+91'],
                            ['label' => '🇩🇪 +49', 'value' => '+49'],
                            ['label' => '🇫🇷 +33', 'value' => '+33'],
                            ['label' => '🇯🇵 +81', 'value' => '+81'],
                            ['label' => '🇦🇺 +61', 'value' => '+61'],
                        ]" searchable />
                    </x-slot:left>
                </x-input.select>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Styled API" anchor="styled-api">
        <div class="space-y-4">
            <p>
                The <x-block>select.styled</x-block> component supports querying values via an API. When used inside
                <x-block>input.select</x-block>, all API features remain available, including the <x-block>request</x-block> attribute.
                For detailed information about the Styled API configuration, refer to the
                <a href="{{ route('documentation', ['v3', 'form', 'select']) }}" class="underline" wire:navigate>Select Styled API documentation</a>.
            </p>
            <x-preview language="blade" :contents="$styledApi">
                <x-input.select label="Role">
                    <x-slot:left>
                        <x-select.styled :request="route('api.users')" />
                    </x-slot:left>
                </x-input.select>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Multiple" anchor="styled-multiple">
        <div class="space-y-4">
            <p>
                When using <x-block>multiple</x-block> attribute, users can select multiple options from the select,
                but in this case the labels selected will not be displayed. Instead, a <x-block>X selected</x-block> label
                will be displayed
            </p>
            <x-preview language="blade" :contents="$styledApi">
                <x-input.select label="Role">
                    <x-slot:left>
                        <x-select.styled :request="route('api.users')" multiple />
                    </x-slot:left>
                </x-input.select>
            </x-preview>
        </div>
    </x-section>
    {{-- Features --}}
    <x-separator text="Features" />
    <x-section title="Label & Hint" anchor="features-label-hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-input.select label="Phone Number" hint="Include your country code">
                <x-slot:left>
                    <x-select.styled :options="['+1', '+44', '+55']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Icon" anchor="features-icon">
        <x-preview language="blade" :contents="$icon">
            <div class="space-y-2">
                <x-input.select label="Phone" icon="phone">
                    <x-slot:left>
                        <x-select.styled :options="['+1', '+44', '+55']" />
                    </x-slot:left>
                </x-input.select>
                <x-input.select label="Phone" icon="phone" position="right">
                    <x-slot:left>
                        <x-select.styled :options="['+1', '+44', '+55']" />
                    </x-slot:left>
                </x-input.select>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Prefix & Suffix" anchor="features-prefix-suffix">
        <x-preview language="blade" :contents="$prefixSuffix">
            <div class="space-y-2">
                <x-input.select label="Domain" prefix="https://">
                    <x-slot:right>
                        <x-select.styled :options="['.com', '.net', '.org', '.io']" side="right" />
                    </x-slot:right>
                </x-input.select>
                <x-input.select label="Amount" suffix="per month">
                    <x-slot:left>
                        <x-select.styled :options="['USD', 'EUR', 'BRL']" />
                    </x-slot:left>
                </x-input.select>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Clearable" anchor="features-clearable">
        <x-preview language="blade" :contents="$clearable">
            <x-input.select label="Phone Number" clearable>
                <x-slot:left>
                    <x-select.styled :options="['+1', '+44', '+55']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
</x-layout>
