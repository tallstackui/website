@props(['text' => null])

@php($text ??= $slot->toHtml())

<div {{ $attributes }}>
    <x-alert color="pink" icon="exclamation-circle" translucent>
        {!! $text !!}
    </x-alert>
</div>
