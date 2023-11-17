<x-layout>
    <x-slot:title>
        Form Textarea
    </x-slot:title>
    <x-slot:description>
        Form textarea component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="textarea" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-textarea />
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
        <x-preview title="Resize"
                   language="blade"
                   :contents="$resize">
            <x-textarea resize />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Auto-resize"
                   description="Start to type in the textarea to see the auto-resize in action."
                   language="blade"
                   :contents="$resizeAuto">
            <x-textarea :rows="1" resize-auto />
        </x-preview>
    </x-section>
</x-layout>
