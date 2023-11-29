@props(['title' => null, 'description' => null, 'anchor' => null, 'id' => null, 'p' => null, 'copy' => true])

@php($anchor ??= str($title)->slug()->lower())

<section x-data="{ anchor : false, @if ($copy) code : false @endif }" id="{{ $anchor }}" {{ $attributes->merge(['class' => 'text-gray-600 mb-6 dark:text-slate-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title || $copy)
        <div @class(['flex items-center justify-between', 'mb-2' => $description === null])>
            @if ($title)
            <h2 @class(['text-xl tracking-tight text-pink-600 font-medium cursor-pointer']) x-on:mouseover="anchor = true" x-on:mouseleave="anchor = false">
                <a href="#{{ $anchor }}">
                    <span class="text-gray-400 dark:text-gray-600" x-show="anchor">#</span>
                    {{ $title }}
                </a>
            </h2>
            @endif
            @if ($copy)
                <div class="flex rounded-md bg-white dark:bg-slate-600">
                    <button class="flex items-center gap-x-1 overflow-hidden rounded-md p-1 text-sm transition focus:outline-none sm:px-2"
                            :class="{
                        'text-pink-500 font-semibold': code,
                        'text-gray-400 dark:text-slate-300': !code
                    }" type="button" x-on:click="code = !code" x-cloak>
                        <x-icon name="code-bracket" class="h-3 w-3" />
                        Code
                    </button>
                </div>
            @endif
        </div>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">{{ $description }}</p>
    @endif
    @if ($p)
        <p {{ $p->attributes }}>
            {!! $p !!}
        </p>
    @else
        {!! $slot !!}
    @endif
</section>
