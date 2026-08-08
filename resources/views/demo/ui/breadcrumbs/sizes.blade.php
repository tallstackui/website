@php
    $items = [
        ['label' => 'Home', 'link' => '#'],
        ['label' => 'Users', 'link' => '#'],
        ['label' => 'John Doe'],
    ];
@endphp

<x-demo-layout title="Breadcrumbs Sizes">
    <div class="mx-auto max-w-3xl space-y-4 px-6 py-10">
        <x-breadcrumbs xs :items="$items" />
        <x-breadcrumbs sm :items="$items" />
        <x-breadcrumbs :items="$items" />
        <x-breadcrumbs lg :items="$items" />
    </div>
</x-demo-layout>
