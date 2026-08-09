@php
    $customization = <<<'HTML'
    TallStackUi::customize()
        ->form('error')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>Error Component</x-slot>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Error" />
    </x-slot>
    <x-internals-warning customization />
</x-layout>
