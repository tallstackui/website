<x-layout>
    <x-slot:title>
        Alpine Integration.
    </x-slot:title>
    <x-slot:description>
        Native AlpineJS integration.
    </x-slot:description>
    <x-section title="Concept" :copy="false">
        <p>
            TallStackUI was designed to work only with Livewire in version 3, and Livewire natively
            delivers AlpineJS in its core in this new version. Therefore, you can take advantage of
            everything that AlpineJS offers you, such as the Mask plugin. Let's take a look at some
            examples using the AlpineJS Mask plugin in the TallStackUI inputs.
        </p>
    </x-section>
    <x-section title="Maskable Inputs">
        <x-preview language="blade" :contents="$input">
            <div class="space-y-2">
                <x-input label="Birthday"
                         hint="Insert your birthday"
                         value="27/02/1992"
                         x-mask="99/99/9999" />
                <x-input label="Salary"
                         hint="Insert your desired salary"
                         value="200.000"
                         x-mask:dynamic="$money($input, ',')" />
            </div>
        </x-preview>
    </x-section>
    <x-warning>
        Learn more about the AlpineJS Mask plugin <a href="https://alpinejs.dev/plugins/mask" class="underline" target="_blank">in the docs.</a>
    </x-warning>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.dark-theme')" text="Dark Theme" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.contribution')" text="Contribution Guide" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
