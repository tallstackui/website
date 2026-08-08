@props([
    'contents'        => null,
    'language'        => 'php',
    'disableCopy'     => null,
    'personalization' => false,
    'customization'   => false,
])

@php
    $contents ??= $slot->toHtml();
    $margin = ($personalization || $customization) ? 'mt-4' : null;
@endphp

<div class="relative">
    @if (! $disableCopy)
        <div class="absolute top-0 right-0">
            <x-copy-code :$contents :$margin />
        </div>
    @endif
    <pre {{ $attributes->class(['overflow-auto custom-scrollbar rounded-lg bg-[#141414] ring-1 ring-white/5']) }}><x-torchlight-code language="{{ $language }}" :$contents /></pre>
</div>
