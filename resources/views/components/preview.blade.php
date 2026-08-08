@props([
    'id' => uniqid(),
    'contents' => null,
    'title' => null,
    'description' => null,
    'anchor' => null,
    'numbers' => false,
    'background' => null,
    'language' => 'php',
    'disableCopy' => false,
    'frame' => null,
    'height' => 420,
])

@php
    $anchor ??= str($title)->slug()->lower();
@endphp

<div x-data="{ anchor : false }" @if ($id) id="{{ $id }}" @endif>
    <div x-show="!code"
         @class([
            'bg-white border border-gray-200 rounded-xl dark:bg-dark-900 dark:border-none' => $frame || $background,
            'overflow-hidden'  => $frame,
         ])>
        @if ($frame)
            <iframe src="{{ url('/demo/' . ltrim($frame, '/')) }}"
                    class="block w-full"
                    style="height: {{ (int) $height }}px"
                    loading="lazy"
                    title="{{ $title ?? $frame }} live preview"></iframe>
        @else
            {{ $slot }}
        @endif
    </div>
    @if ($contents)
        <div x-cloak x-show="code">
            <x-code :language="$language" :$contents :$disableCopy />
        </div>
    @endif
</div>
