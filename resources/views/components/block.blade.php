@aware(['type' => null])
@props(['pink' => null, 'xs' => null])

@php
    $context = ! $pink && in_array($type, ['info', 'success', 'warning', 'error'], true) ? $type : null;
@endphp

<code {{ $attributes->merge([
    'class' => 'rounded p-1 font-semibold',
])->class([
    'bg-gray-300 text-gray-600 dark:bg-gray-800/80 dark:text-white'                   => ! $pink && ! $context,
    'bg-pink-200 text-pink-600'                                                       => $pink,
    'bg-blue-200/60 text-blue-700 dark:bg-blue-400/20 dark:text-blue-200'             => $context === 'info',
    'bg-emerald-200/60 text-emerald-700 dark:bg-emerald-400/20 dark:text-emerald-200' => $context === 'success',
    'bg-amber-200/60 text-amber-700 dark:bg-amber-400/20 dark:text-amber-200'         => $context === 'warning',
    'bg-rose-200/60 text-rose-700 dark:bg-rose-400/20 dark:text-rose-200'             => $context === 'error',
    'text-xs'                                                                         => $xs,
]) }}>{{ $slot }}</code>
