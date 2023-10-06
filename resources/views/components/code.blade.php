@props(['language' => 'php'])

<pre {{ $attributes->class([
    'overflow-auto custom-scrollbar rounded-lg bg-[#292D3E] p-4 my-2',
]) }}><x-torchlight-code language="{{ $language }}">{!! $slot !!}</x-torchlight-code></pre>
