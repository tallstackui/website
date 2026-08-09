@props([
    "doc",
    "text" => null,
])

@php
    $doc = \Illuminate\Support\Arr::wrap($doc);
@endphp

<x-link
    :href="route('documentation', [...$doc])"
    navigate
    underline
    :color="null"
>
    {{ $text ?? $slot }}
</x-link>
