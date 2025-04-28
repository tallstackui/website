@props(['pink' => null, 'xs' => null])

<code {{ $attributes->merge([
    'class' => 'rounded p-1 font-semibold',
])->class([
    'bg-gray-300 text-gray-600 dark:bg-gray-800/80 dark:text-white' => ! $pink,
    'bg-pink-200 text-pink-600' => $pink,
    'text-xs' => $xs,
]) }}>{{ $slot }}</code>
