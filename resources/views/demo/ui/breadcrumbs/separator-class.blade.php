@php
    $items = [
        ["label" => "Home", "link" => "#"],
        ["label" => "Users", "link" => "#"],
        ["label" => "John Doe"],
    ];
@endphp

<x-demo-layout title="Breadcrumbs Separator Class">
    <div class="mx-auto max-w-3xl px-6 py-10">
        <x-breadcrumbs
            separator-class="text-red-500 font-bold"
            :items="$items"
        />
    </div>
</x-demo-layout>
