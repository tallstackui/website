@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="form/currency">
    <x-slot:title>
        Form Currency
    </x-slot:title>
    <x-slot:description>
        Form currency component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Currency" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        The currency component is a component designed for displaying and formatting
        currency values. Behind the scenes the currency component is an adaptation of
        the <x-block>input</x-block> component with usage of native JavaScript's <x-block>Intl.NumberFormat</x-block>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-currency />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-currency label="Salary Expectation" hint="Between 5,000 and 10,000 USD" />
        </x-preview>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <x-currency clearable />
        </x-preview>
    </x-section>
    <x-section title="Different Currencies">
        <div class="space-y-4">
            <p>
                You should use the <x-block>locale</x-block> attribute to matches the logic of
                <x-block>Intl.NumberFormat</x-block>. By default, the value assigned to the locale attribute
                is <x-block>en-US</x-block>, but you can use any other value supported by <x-block>Intl.NumberFormat</x-block>
                to format the input in the desired currency format.
            </p>
            <x-preview language="blade" :contents="$differentCurrencies">
                <div class="space-y-2">
                    <x-currency label="USD" symbol currency />
                    <x-currency label="BRL" hint="Locale as pt-BR" locale="pt-BR" symbol="R$" currency="BRL" />
                    <x-currency label="EUR" hint="Locale as es-ES" locale="es-ES" symbol="€" currency="EUR" />
                </div>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Intl Options" disable-copy>
        <div class="space-y-4">
            <p>
                The component was built with two attributes that are intended to manipulate the JavaScript <x-block>Intl.NumberFormat</x-block>,
                called <x-block>decimals</x-block> and <x-block>precision</x-block>. You can use them to manipulate the
                JavaScript <x-block>Intl.NumberFormat</x-block>:
            </p>
            <x-code :contents="$intlOptions" language="js" disable-copy />
        </div>
    </x-section>
    <x-section title="Symbols">
        <div class="space-y-4">
            <p>
                You can display symbols related to each supported
                currency through <a href="{{ route('documentation', ['v4', 'translation']) }}" class="underline">TallStackUI's translation system.</a> You can control which symbol
                will be displayed via arguments.
            </p>
            <x-preview language="blade" :contents="$symbols">
                <div class="space-y-2">
                    <x-currency label="Only symbol" symbol />
                    <x-currency label="Only currency code" currency />
                    <x-currency label="Both" symbol currency />
                </div>
            </x-preview>
            <p>
                The symbols are not based on the <x-block>locale</x-block> attribute, but rather on your app's <x-block>app.locale</x-block> configuration.
                This is because you may want to display a currency for currencies other than your app's <x-block>app.locale</x-block>. If you
                want to replace the symbols at runtime, you can set a string value on it:
            </p>
            <x-preview language="blade" :contents="$customSymbols">
                <div class="space-y-2">
                    <x-currency symbol="$$" />
                    <x-currency currency="$$" />
                </div>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Sync Modes" disable-copy>
        <div class="space-y-4">
            <p>
                When bound to a Livewire property, the currency component offers three modes for sending the
                value to the server. Pick the one that matches how the value is persisted on the backend.
            </p>
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Mode"/>
                        <x-custom-table.th label="Sent to Livewire"/>
                        <x-custom-table.th label="When to use"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    <x-custom-table.tr>
                        <x-custom-table.td first>Default <span class="text-xs text-gray-400">(no prop)</span></x-custom-table.td>
                        <x-custom-table.td>"200000"</x-custom-table.td>
                        <x-custom-table.td>Stored as integer cents</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>mutate</x-custom-table.td>
                        <x-custom-table.td>"2,000.00" / "2.000,00"</x-custom-table.td>
                        <x-custom-table.td>Persisting the user-facing string verbatim</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>decimal</x-custom-table.td>
                        <x-custom-table.td>"2000.00"</x-custom-table.td>
                        <x-custom-table.td>Stored as <x-block>decimal</x-block> / <x-block>float</x-block> column</x-custom-table.td>
                    </x-custom-table.tr>
                </x-custom-table.tbody>
            </x-custom-table>
            <x-warning warning title="Mutually exclusive">
                <x-block>mutate</x-block> and <x-block>decimal</x-block> cannot be used together.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Default Mode" disable-copy>
        <div class="space-y-4">
            <p>
                Without <x-block>mutate</x-block> or <x-block>decimal</x-block>, the component sends a digits-only
                string to the Livewire property. With <x-block>decimals="2"</x-block>, typing <x-block>1000</x-block>
                displays <x-block>10.00</x-block> but the property receives <x-block>"1000"</x-block>. This is
                ideal when monetary values are stored as integer cents.
            </p>
            <x-code language="blade" :contents="$modeDefault" />
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Typed digits"/>
                        <x-custom-table.th label="Display (en-US)"/>
                        <x-custom-table.th label="Display (pt-BR)"/>
                        <x-custom-table.th label="Sent to Livewire"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    <x-custom-table.tr>
                        <x-custom-table.td first>1000</x-custom-table.td>
                        <x-custom-table.td>10.00</x-custom-table.td>
                        <x-custom-table.td>10,00</x-custom-table.td>
                        <x-custom-table.td>"1000"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>200000</x-custom-table.td>
                        <x-custom-table.td>2,000.00</x-custom-table.td>
                        <x-custom-table.td>2.000,00</x-custom-table.td>
                        <x-custom-table.td>"200000"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>150055</x-custom-table.td>
                        <x-custom-table.td>1,500.55</x-custom-table.td>
                        <x-custom-table.td>1.500,55</x-custom-table.td>
                        <x-custom-table.td>"150055"</x-custom-table.td>
                    </x-custom-table.tr>
                </x-custom-table.tbody>
            </x-custom-table>
        </div>
    </x-section>
    <x-section title="Mutate Mode" disable-copy>
        <div class="space-y-4">
            <p>
                With the <x-block>mutate</x-block> attribute, the component sends the formatted string <strong>exactly as it appears in the input</strong>,
                group separator and decimal separator included. Use it when you want to persist the user-facing representation verbatim
                (e.g., a free-text display label).
            </p>
            <x-code language="blade" :contents="$modeMutate" />
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Typed digits"/>
                        <x-custom-table.th label="Display"/>
                        <x-custom-table.th label="Sent to Livewire"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    <x-custom-table.tr>
                        <x-custom-table.td first>1000</x-custom-table.td>
                        <x-custom-table.td>10.00</x-custom-table.td>
                        <x-custom-table.td>"10.00"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>200000</x-custom-table.td>
                        <x-custom-table.td>2,000.00</x-custom-table.td>
                        <x-custom-table.td>"2,000.00"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>150055</x-custom-table.td>
                        <x-custom-table.td>1,500.55</x-custom-table.td>
                        <x-custom-table.td>"1,500.55"</x-custom-table.td>
                    </x-custom-table.tr>
                </x-custom-table.tbody>
            </x-custom-table>
        </div>
    </x-section>
    <x-section title="Decimal Mode" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>decimal</x-block> attribute strips the locale's group separator and normalizes the decimal
                separator to <x-block>.</x-block>, regardless of locale. The resulting string is directly castable via
                <x-block>(float)</x-block> / <x-block>(int)</x-block> or by Eloquent <x-block>decimal:N</x-block> / <x-block>float</x-block> casts.
            </p>
            <x-code language="blade" :contents="$modeDecimal" />
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Typed digits"/>
                        <x-custom-table.th label="Display"/>
                        <x-custom-table.th label="Sent to Livewire"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    <x-custom-table.tr>
                        <x-custom-table.td first>1000</x-custom-table.td>
                        <x-custom-table.td>10.00</x-custom-table.td>
                        <x-custom-table.td>"10.00"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>200000</x-custom-table.td>
                        <x-custom-table.td>2,000.00</x-custom-table.td>
                        <x-custom-table.td>"2000.00"</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>150055</x-custom-table.td>
                        <x-custom-table.td>1,500.55</x-custom-table.td>
                        <x-custom-table.td>"1500.55"</x-custom-table.td>
                    </x-custom-table.tr>
                </x-custom-table.tbody>
            </x-custom-table>
            <p>
                A typical use case is binding to a column with an Eloquent <x-block>decimal:2</x-block> cast, the value
                arrives at the property ready for assignment, no manual parsing required:
            </p>
            <x-code language="php" :contents="$decimalEloquent" />
            <x-code language="blade" :contents="$decimalBlade" />
        </div>
    </x-section>
    <x-section title="Global Defaults" disable-copy>
        <div class="space-y-4">
            <p>
                If most components in your application need the same sync mode, set it once in the <a href="{{ route('documentation', ['v4', 'configuration']) }}" class="underline" wire:navigate>configuration file</a>
                to avoid repeating the prop on every usage.
            </p>
            <x-code language="php" :contents="$globalDefaults" />
        </div>
    </x-section>
    <x-section title="Caveats">
        <div class="space-y-4">
            <p>
                The currency component can be used entirely out of the Livewire context. For this type of situation,
                the value to be formatted should be sent to the currency component using the <x-block>value</x-block>
                attribute, but with the value as a string. The value will be returned to the controller formatted as
                a string when the form is submitted.
            </p>
        </div>
    </x-section>
</x-layout>
