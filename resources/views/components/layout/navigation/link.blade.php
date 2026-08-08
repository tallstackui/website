@props([
    'text'      => null,
    'href'      => null,
    'activated' => null,
    'new'       => false,
])

@php
    $sanitized = fn (string $text) => str($text)->remove(config('app.url'));

    $activated ??= $sanitized($href)->exactly($sanitized(request()->fullUrl()));
@endphp

<a
    href="{{ $href }}"
    {{
        $attributes->class([
            'group inline-flex w-full items-center gap-x-2 rounded-md py-1 pr-2 text-[0.84rem] transition',
            'text-gray-500 hover:text-gray-900 dark:text-dark-400 dark:hover:text-dark-100' => ! $activated,
            'font-medium text-pink-600 dark:text-pink-400'                                  => $activated,
        ])
    }}
    wire:navigate
>
    <span
        @class([
            'h-3.5 w-px shrink-0 rounded-full transition',
            'bg-transparent group-hover:bg-gray-300 dark:group-hover:bg-dark-600' => ! $activated,
            'bg-pink-500'                                                         => $activated,
        ])
    ></span>
    {!! $text ?? $slot !!}
    @if ($new)
        <span class="rounded-full border border-violet-500/40 px-1.5 py-px font-mono text-[0.55rem] font-semibold tracking-widest text-violet-500">
            NEW
        </span>
    @endif
</a>
