@props(['contents' => null, 'text' => false, 'margin' => null])

@php($hash = is_string($contents) ? md5($contents) : md5(json_encode($contents)))

<div x-data="clipboard(@js($contents), @js($hash))" @class(['relative z-20 flex items-center m-2', $margin])>
    <button class="cursor-pointer" data-ref="{{ $hash }}" x-on:click="copy()">
        @if (!$text)
            <x-icon name="document" class="text-gray-500 h-5 w-5" x-show="!notification" />
            <x-icon name="document-check" class="h-5 w-5 text-pink-500" x-show="notification" />
        @else
            {!! $slot !!}
            <x-icon name="check" class="h-5 w-5 text-pink-500" x-show="notification" />
        @endif
    </button>
</div>
