@props(['text' => null, 'href' => null, 'activated' => null, 'new' => false])

@php
    use Illuminate\Support\Facades\Route;

    $activated ??= str($href)->contains(Route::current()->compiled->getStaticPrefix());
@endphp

<a href="{{ $href }}" {{ $attributes->class([
        'transition inline-flex items-center gap-x-2',
        'text-gray-500 dark:text-gray-400' => ! $activated,
        'text-pink-700 dark:text-pink-500' => $activated,
    ]) }}>
    @if ($activated)
        <x-icon name="arrow-small-right"
                class="h-4 w-3" />
    @endif
    {!! $text ?? $slot !!}
    @if ($new)
        <span class="inline-flex animate-pulse items-center rounded-md border border-pink-500 bg-pink-500 px-1 text-xs font-bold text-pink-50 outline-none py dark:border-transparent dark:bg-pink-700 dark:bg-opacity-80">
            NEW
        </span>
    @endif
</a>
