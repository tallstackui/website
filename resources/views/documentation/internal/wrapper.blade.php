@php
    $customization["input"] = <<<'HTML'
    TallStackUi::customize()
        ->wrapper('input')
        ->block('block', 'classes');
    HTML;

    $customization["radio"] = <<<'HTML'
    TallStackUi::customize()
        ->wrapper('radio')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>Wrapper Component</x-slot>
    <x-slot:description>
        The generic wrapper component used to wrapper form components.
    </x-slot>
    <x-slot:customization>
        <livewire:customization
            :customization="$customization['input']"
            component="Wrapper\Input"
        />
        <livewire:customization
            :customization="$customization['radio']"
            component="Wrapper\Radio"
        />
    </x-slot>
    <x-internals-warning customization />
</x-layout>
