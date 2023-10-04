@props(['language' => 'php'])

<pre {{ $attributes->class([
    'overflow-auto rounded-lg bg-[#292D3E] p-4',
]) }}><x-torchlight-code language="{{ $language }}">{!! $slot !!}</x-torchlight-code></pre>
