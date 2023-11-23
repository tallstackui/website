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
            <x-textarea label="Name" hint="Insert the description" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Required Label Indicator"
                   description="You can use a asterisk in the label to indicate that the field is required."
                   language="blade"
                   :contents="$asterisk">
            <x-textarea label="Description *" />
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
        <x-preview title="Resize Auto"
                   description="Start to type in the textarea to see the resize-auto in action."
                   language="blade"
                   :contents="$resizeAuto">
            <x-textarea :rows="1" resize-auto />
        </x-preview>
    </x-section>
</x-layout>
