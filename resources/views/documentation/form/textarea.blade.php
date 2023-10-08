<x-layout>
    <x-slot:title>
        Form Textarea
    </x-slot:title>
    <x-slot:description>
        For textarea component.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-textarea />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Resize"
                   language="blade"
                   :contents="$resize">
            <x-textarea resize />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Rows Control"
                   language="blade"
                   :contents="$rows">
            <x-textarea :rows="3" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$labelHint">
            <x-textarea label="Name" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Disabled & Readonly"
                   language="blade"
                   :contents="$effects">
            <div class="space-y-2">
                <x-textarea label="Name" disabled>TallStackUi</x-textarea>
                <x-textarea label="Name" value="TallStackUi" readonly>TallStackUi</x-textarea>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.textarea />
        </x-preview>
    </x-section>
</x-layout>
