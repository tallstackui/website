@php
    $items = [
        ['label' => 'Home', 'link' => '#'],
        ['label' => 'Users', 'link' => '#'],
        ['label' => 'John Doe'],
    ];
@endphp

<x-demo-layout title="Breadcrumbs Slots">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <x-breadcrumbs :items="$items">
            <x-slot:left>
                <x-icon name="home" class="w-5 h-5 mr-2 text-gray-400" />
            </x-slot:left>
            <x-slot:right>
                <span class="text-xs text-gray-400 ml-2">3 levels</span>
            </x-slot:right>
        </x-breadcrumbs>
    </div>
</x-demo-layout>
