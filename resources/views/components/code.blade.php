@props(['contents' => null, 'language' => 'php', 'unpadding' => false])

@php($contents ??= $slot->toHtml())

<div class="relative">
    <div class="absolute right-0 top-0">
        <x-copy-to-clipboard :$contents />
    </div>
</div>
<pre {{ $attributes->class(['overflow-auto custom-scrollbar rounded-lg bg-[#292D3E] p-4 my-2']) }}
    @if ($unpadding) style="padding-left: 0rem !important;" @endif><x-torchlight-code language="{{ $language }}" :$contents /></pre>
