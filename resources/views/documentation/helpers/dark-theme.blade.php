@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Dark Theme</x-slot>
    <x-slot:description>
        Helper to easily manage dark theme.
    </x-slot>
    <x-section disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI provides a simple yet powerful helper to add dark
                theme support to your application. The main idea of this helper
                is to offer an easy way to control the dark theme by persisting
                a value in the browser's local storage. After applying the
                helper, an AlpineJS variable called
                <x-block>darkTheme</x-block>
                will be offered to control the dark theme persisting the changes
                in the local storage.
            </p>
            <p>
                Enable the dark theme support in your
                <x-block>app.css</x-block>
                CSS configuration file:
            </p>
            <x-code language="css" :contents="$tailwindcss" disable-copy />
            <p>
                Add the helper on the
                <x-block>html</x-block>
                tag of your layout:
            </p>
            <x-code language="blade" :contents="$helper" disable-copy />
            <p>
                You can customize the name of the state stored in local storage
                of the browser, default name is
                <x-block>dark-theme</x-block>
            </p>
            <x-code language="blade" :contents="$customized" disable-copy />
            <p>
                You can also force the
                <x-block>darkTheme</x-block>
                variable to be initialized to
                <x-block>true</x-block>
                :
            </p>
            <x-code language="blade" :contents="$dark" disable-copy />
            <p>This is useful if your theme is dark theme by default.</p>
            <p>
                To avoid conflicts with the Livewire 3
                <x-block>wire:navigate</x-block>
                , the class control block must be inserted in the
                <x-block>body</x-block>
                tag:
            </p>
            <x-code language="blade" :contents="$body" disable-copy />
            <p>After that, create a button to control the dark theme:</p>
            <x-code language="blade" :contents="$button" disable-copy />
            <p>
                This button must be covered by the layout that received the
                helper. If you prefer,
                <x-refer :doc="['ui', 'theme-switch']">
                    TallStackUI offer the Theme Switch component
                </x-refer>
                to easily manage the dark theme.
            </p>
            <p>Rebuild your assets using this command:</p>
            <x-code language="shell" :contents="$assets" />
            <p>
                Finally, all you need to do is adapt all your CSS classes to the
                dark theme variation:
            </p>
            <x-code language="blade" :contents="$example" disable-copy />
        </div>
    </x-section>
</x-layout>
