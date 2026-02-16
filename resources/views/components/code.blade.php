@props([
    'contents' => null,
    'language' => 'php',
    'disableCopy' => null,
    'personalization' => false,
    'customization' => false,
])

@php
    $contents ??= $slot->toHtml();
    $margin = ($personalization || $customization) ? 'mt-4' : null;
@endphp

<div class="relative">
    @if (!$disableCopy)
        <div class="absolute right-0 top-0">
            <x-copy-code :$contents :$margin />
        </div>
    @endif
    <pre {{ $attributes->class(['overflow-auto custom-scrollbar rounded-lg bg-[#292D3E]']) }}><x-torchlight-code language="{{ $language }}" :$contents /></pre>
</div>
