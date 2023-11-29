@props(['text' => null, 'href' => null, 'back' => false])

@php($icon = $back ? 'chevron-left' : 'chevron-right')

<a class="inline-flex items-center gap-x-2" href="{{ $href }}">
    @if ($back)
        <x-icon :$icon class="h-4 w-4 flex-none text-gray-500 dark:text-white" />
    @endif
    <span class="flex flex-row-reverse items-center gap-x-1 text-base font-medium text-gray-600 dark:text-white">
        {{ $text ?? $slot }}
    </span>
    @if (!$back)
        <x-icon :$icon class="h-4 w-4 flex-none text-gray-500 dark:text-white" />
    @endif
</a>
