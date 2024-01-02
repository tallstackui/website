@props(['contents' => null, 'language' => 'php', 'unpadding' => false, 'disableCopy' => null, 'personalization' => false])

@php
    $contents ??= $slot->toHtml();
    $margin = $personalization ? 'mt-4' : null;
@endphp

<div class="relative">
    @if (!$disableCopy)
    <div class="absolute right-0 top-0">
        <x-copy-code :$contents :$margin />
    </div>
    @endif
    <pre {{ $attributes->class(['overflow-auto custom-scrollbar rounded-lg bg-[#292D3E] p-4 my-2']) }}
    @if ($unpadding) style="padding-left: 0rem !important;" @endif><x-torchlight-code language="{{ $language }}" :$contents /></pre>
</div>
