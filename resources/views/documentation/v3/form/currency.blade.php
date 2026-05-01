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
                currency through <a href="{{ route('documentation', ['v3', 'translation']) }}" class="underline">TallStackUI's translation system.</a> You can control which symbol
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
    <x-section title="Caveats">
        <div class="space-y-4">
            <p>
                There are a few important caveats to note about the currency component:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    The component
                    can be used entirely out of the Livewire context. For this type of situation, the value to be formatted
                    should be sent to the currency component using the <x-block>value</x-block> attribute, but with the value as a string.
                    The value will be returned to the controller formatted as a string, when the form is submitted.
                </li>
                <li>
                    When using the component inside the Livewire context, however, the value can be sent to the component in different
                    formats <i>(float, int, string)</i>, but the value returned by default will not be formatted. To format the
                    value when emitting it to the Livewire, you must use the <x-block>mutate</x-block> attribute, which
                    instructs the currency component to format the value before binding it to the Livewire property.
                </li>
            </ul>
            <x-preview language="blade" :contents="$mutate">
                <div class="space-y-2">
                    <livewire:documentation.form.currency />
                </div>
            </x-preview>
        </div>
    </x-section>
</x-layout>
