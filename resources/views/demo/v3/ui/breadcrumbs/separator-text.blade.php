@php
    $items = [
        ['label' => 'Home', 'link' => '/'],
        ['label' => 'Users', 'link' => '/'],
        ['label' => 'John Doe'],
    ];
@endphp

<x-demo-layout title="Breadcrumbs Separator Text">
    <div class="mx-auto max-w-3xl px-6 py-10 space-y-4">
        <x-breadcrumbs separator="»" :items="$items" />
        <x-breadcrumbs separator=">" :items="$items" />
        <x-breadcrumbs separator="|" :items="$items" />
    </div>
</x-demo-layout>
