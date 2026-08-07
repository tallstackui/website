@props([
    'p'           => null,
    'id'          => null,
    'new'         => null,
    'title'       => null,
    'anchor'      => null,
    'description' => null,
    'disableCopy' => null,
    'dontCopy'    => null,
])

@php($anchor ??= str($title)->slug()->lower())

<section x-data="{ anchor : false, code : false }" id="{{ $anchor }}" {{ $attributes->merge(['class' => 'text-gray-600 mb-6 dark:text-dark-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <div @class(['flex items-center justify-between', 'mb-2' => $description === null])>
            @if ($title)
            <h2 @class(['text-xl tracking-tight text-pink-600 font-medium cursor-pointer', 'flex items-center gap-2' => $new]) x-on:mouseover="anchor = true" x-on:mouseleave="anchor = false">
                <a class="flex gap-1" href="#{{ $anchor }}">
                    <span class="text-gray-400 dark:text-gray-400" x-show="anchor">#</span>
                    {{ $title }}
                    @if (!$dontCopy)
                        <x-clipboard icon text="{{ url()->current() . '#' . $anchor }}" x-show="anchor" />
                    @endif
                </a>
                @if ($new)
                    <span class="rounded-full border border-violet-500/40 px-2 py-px font-mono text-sm font-semibold tracking-widest text-violet-500">
                        NEW
                    </span>
                @endif
            </h2>
            @endif
            @if (!$disableCopy)
                <div class="flex rounded-md bg-transparent">
                    <button class="flex items-center gap-x-1 overflow-hidden rounded-md p-1 text-sm transition focus:outline-none sm:px-2 cursor-pointer"
                            :class="{
                        'text-pink-500 font-semibold': code,
                        'text-gray-400 dark:text-dark-300': !code
                    }" type="button" x-on:click="
                        if (!code) {
                            document.querySelectorAll('[data-floating]').forEach(el => el.style.display = 'none');
                        }
                        code = !code
                    " x-cloak>
                        <x-icon name="code-bracket" solid class="text-gray-600 dark:text-dark-400 h-5 w-5" />
                    </button>
                </div>
            @endif
        </div>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 dark:text-dark-400 mb-4">{{ $description }}</p>
    @endif
    @if (! str($slot)->startsWith(['<p', '<code', '<div', '<h1', '<h2', '<img', '<pre', '<ul', '<ol', '<x-code']))
        <p>{!! $slot !!}</p>
    @else
        {!! $slot !!}
    @endif
</section>
