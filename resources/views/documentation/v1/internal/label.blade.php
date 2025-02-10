@php
    $personalization = <<<'HTML'
    TallStackUi::personalize()
        ->form('label')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :torchlight="false">
    <x-slot:title>
        Label Component
    </x-slot:title>
    <x-slot:description>
        The generic label component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Form\Label" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
