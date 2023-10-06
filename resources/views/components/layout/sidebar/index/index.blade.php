@props(['title', 'anchor'])

@php($empty = $slot->isNotEmpty())

<li>
    <h3><a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="{{ $anchor }}">{{ $title }}</a></h3>
    @if ($slot->isNotEmpty())
        <ol role="list" class="mt-2 pl-5 text-slate-500 space-y-3 dark:text-slate-400">
            {{ $slot }}
        </ol>
    @endif
</li>
