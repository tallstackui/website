@php
    $personalization = <<<'HTML'
    TallStackUi::personalize()
        ->form('hint')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>
        Hint Component
    </x-slot:title>
    <x-slot:description>
        The generic hint component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Form\Hint" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
