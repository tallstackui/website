@aware(['type' => null])
@props(['pink' => null, 'xs' => null])

@php
    $context = ! $pink && in_array($type, ['info', 'success', 'warning', 'error'], true) ? $type : null;

    $style = $pink ? 'bg-pink-200! text-pink-600!' : match ($context) {
        'info'    => 'bg-blue-200/60! text-blue-700! dark:bg-blue-400/20! dark:border-blue-400/20! dark:text-blue-200!',
        'success' => 'bg-emerald-200/60! text-emerald-700! dark:bg-emerald-400/20! dark:border-emerald-400/20! dark:text-emerald-200!',
        'warning' => 'bg-amber-200/60! text-amber-700! border-amber-200! dark:bg-amber-400/20 dark:border-amber-400/20! dark:text-amber-200',
        'error'   => 'bg-rose-200/60! text-rose-700! dark:bg-rose-400/20! dark:border-rose-400/20! dark:text-rose-200!',
        default   => null,
    };
@endphp

<x-kbd shadowless @class([$style, 'text-xs' => $xs])>{{ $slot }}</x-kbd>
