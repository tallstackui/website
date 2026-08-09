@php
    $customization = <<<'HTML'
    TallStackUi::customize()
        ->form('label')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>Label Component</x-slot>
    <x-slot:description>
        The generic label component used in form components.
    </x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Label" />
    </x-slot>
    <x-internals-warning customization />
</x-layout>
