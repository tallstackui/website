@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Alpine Integration.</x-slot>
    <x-slot:description>
        Native AlpineJS integration.
    </x-slot>
    <x-section title="Concept" disable-copy>
        <p>
            Since TallStackUI is a library focused on the TALL Stack, which in
            turn makes use of AlpineJS to handle all JavaScript, you can use
            AlpineJS masks in your components, through the
            <a
                href="https://alpinejs.dev/plugins/mask"
                class="underline"
                target="_blank"
            >
                AlpineJS Mask
            </a>
            plugin, which is delivered by default with Livewire 3.
        </p>
    </x-section>
    <x-section title="Maskable Inputs">
        <x-preview language="blade" :contents="$input">
            <div class="space-y-2">
                <x-input
                    label="Birthday"
                    hint="Insert your birthday"
                    value="27/02/1992"
                    x-mask="99/99/9999"
                />
                <x-input
                    label="Salary"
                    hint="Insert your desired salary"
                    value="200.000"
                    x-mask:dynamic="$money($input, ',')"
                />
                <x-input
                    label="Credit Card"
                    hint="Insert your credit card number"
                    x-mask:dynamic="creditCardMask"
                    value="4444555566667777"
                />
            </div>
        </x-preview>
    </x-section>
    <script>
        function creditCardMask(input) {
            return input.startsWith('34') || input.startsWith('37')
                ? '9999 999999 99999'
                : '9999 9999 9999 9999';
        }
    </script>
    <x-section title="Mozilla Firefox Issue" disable-copy>
        <p>
            Although the AlpineJS plugin works great, there is a small issue
            detected for Mozilla Firefox browsers. As part of a workaround, you
            can use the code tip in
            <a
                href="https://github.com/alpinejs/alpine/discussions/3748"
                class="underline"
                target="_blank"
            >
                this AlpineJS GitHub discussion.
            </a>
        </p>
    </x-section>
</x-layout>
