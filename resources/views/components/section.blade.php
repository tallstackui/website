@props(['title' => null, 'description' => null, 'anchor' => null, 'id' => null])

@php($anchor ??= str($title)->slug()->lower())

<article x-data="{ anchor : false }" id="{{ $anchor }}" {{ $attributes->merge(['class' => 'text-gray-600 mb-6 dark:text-slate-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <h1 @class(['text-xl tracking-tight text-pink-600 font-medium cursor-pointer']) x-on:mouseover="anchor = true" x-on:mouseleave="anchor = false">
            <a href="#{{ $anchor }}" class="m-0">
                <span class="text-gray-400 dark:text-gray-600" x-show="anchor">#</span>
                {{ $title }}
            </a>
        </h1>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 dark:text-slate-300">{{ $description }}</p>
    @endif
    {!! $slot !!}
</article>
