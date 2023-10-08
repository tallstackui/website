<x-layout>
    <x-slot:title>
        Form Input Password
    </x-slot:title>
    <x-slot:description>
        Form input password component. Show or hide password value.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-password value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$labelHint">
            <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Disabled & Readonly"
                   language="blade"
                   :contents="$effects">
            <div class="space-y-2">
                <x-password label="Password" hint="Insert your best password" value="TallStackUi" disabled />
                <x-password label="Password" hint="Insert your best password" value="TallStackUi" readonly />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.password />
        </x-preview>
    </x-section>
</x-layout>
