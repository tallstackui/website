@props(['text' => null])

@php($text ??= $slot->toHtml())

<div {{ $attributes }}>
    <x-alert color="pink" icon="exclamation-circle" light>
        {!! $text !!}
    </x-alert>
</div>
