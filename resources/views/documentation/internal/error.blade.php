@php
    $customization = <<<'HTML'
    TallStackUi::customize()
        ->form('error')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>Error Component</x-slot:title>
    <x-slot:description>The generic error component used in form components.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Error" />
    </x-slot:customization>
    <x-internals-warning customization />
</x-layout>
