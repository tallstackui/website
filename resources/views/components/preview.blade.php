@props([
    'id' => uniqid(),
    'contents' => null,
    'title' => null,
    'description' => null,
    'anchor' => null,
    'numbers' => false,
    'background' => true,
    'language' => 'php',
    'disableCopy' => false,
    'frame' => null,
    'height' => 420,
])

@php($anchor ??= str($title)->slug()->lower())

<div x-data="{ anchor : false }" @if ($id) id="{{ $id }}" @endif>
    <div x-show="!code"
         @class([
            'rounded-lg' => true,
            'p-6' => ! $frame,
            'overflow-hidden border border-slate-200 dark:border-white/10' => $frame,
            'bg-white shadow-md dark:bg-slate-800/50' => $background && ! $frame,
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
