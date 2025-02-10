@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Env Bar
    </x-slot:title>
    <x-slot:description>
        A fixed bar utility at the top of the page.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        //
    </x-section>
</x-layout>
