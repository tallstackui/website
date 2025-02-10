@php
    $personalization = <<<'HTML'
    TallStackUi::personalize()
        ->form('error')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>
        Error Component
    </x-slot:title>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Form\Error" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
