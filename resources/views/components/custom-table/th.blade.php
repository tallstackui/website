@props(['label' => null, 'first' => null])

<th {{ $attributes->merge(['class' => 'px-4 py-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200']) }}>
    {{ $label ?? $slot }}
</th>
