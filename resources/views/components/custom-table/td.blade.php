@props(['first' => null, 'buttons' => null])

<td {{ $attributes->merge(['class' => 'px-4 py-3 text-sm text-gray-600 dark:text-gray-400']) }}>
    {{ $slot }}
</td>
