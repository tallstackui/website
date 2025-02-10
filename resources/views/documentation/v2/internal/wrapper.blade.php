@php
    $personalization['input'] = <<<'HTML'
    TallStackUi::personalize()
        ->wrapper('input')
        ->block('block', 'classes');
    HTML;

    $personalization['radio'] = <<<'HTML'
    TallStackUi::personalize()
        ->wrapper('radio')
        ->block('block', 'classes');
    HTML;
@endphp

<x-layout :torchlight="false">
    <x-slot:title>
        Wrapper Component
    </x-slot:title>
    <x-slot:description>
        The generic wrapper component used to wrapper form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :personalization="$personalization['input']" component="Wrapper\Input" />
        <livewire:personalization :personalization="$personalization['radio']" component="Wrapper\Radio" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
