@php
    $items = [
        ["label" => "Home", "link" => "#"],
        ["label" => "Users", "link" => "#"],
        ["label" => "John Doe"],
    ];
@endphp

<x-demo-layout title="Breadcrumbs Slots">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <x-breadcrumbs :items="$items">
            <x-slot:left>
                <x-icon name="home" class="mr-2 h-5 w-5 text-gray-400" />
            </x-slot>
            <x-slot:right>
                <span class="ml-2 text-xs text-gray-400">3 levels</span>
            </x-slot>
        </x-breadcrumbs>
    </div>
</x-demo-layout>
