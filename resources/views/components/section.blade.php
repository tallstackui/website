@props(['title' => null, 'description' => null, 'id' => null])

@php($anchor = str($title)->slug()->lower())

<section id="{{ $anchor }}" {{ $attributes->merge(['class' => 'text-gray-600 mb-6 dark:text-slate-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <h1 @class(['text-2xl tracking-tight text-pink-600 font-medium dark:text-slate-300 cursor-pointer'])>
            <a href="#{{ $anchor }}" class="m-0">
                <span class="text-gray-300 dark:text-gray-600">#</span>
                {{ $title }}
            </a>
        </h1>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 dark:text-slate-300">{{ $description }}</p>
    @endif
    {!! $slot !!}
</section>
