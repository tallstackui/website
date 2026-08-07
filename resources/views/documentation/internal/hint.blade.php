@php
    $customization = <<<'HTML'
    TallStackUi::customize()
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
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Hint" />
    </x-slot:customization>
    <x-internals-warning customization />
</x-layout>
