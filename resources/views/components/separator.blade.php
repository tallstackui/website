@props(['text' => null, 'dark' => false])

<div {{ $attributes->merge(['class' => 'relative py-4']) }}>
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div @class(['w-full border-t border-pink-300', 'dark:border-gray-300' => $dark])></div>
    </div>
    <div class="relative flex justify-center">
        <span @class(['bg-gray-100 px-2 text-md font-semibold text-pink-500 dark:bg-gray-900', 'dark:text-gray-300' => $dark])>
            {!! $text ?? $slot !!}
        </span>
    </div>
</div>
