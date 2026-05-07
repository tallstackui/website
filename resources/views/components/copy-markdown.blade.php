@props(['slug' => null])

@php
    if (is_array($slug)) {
        $variants = $slug;
    } elseif (is_string($slug) && $slug !== '') {
        $variants = [$slug];
    } else {
        $variants = [];
    }

    $multiple = count($variants) > 1;
    $single = count($variants) === 1 ? array_values($variants)[0] : null;

    $triggerClass = 'group inline-flex cursor-pointer items-center gap-1.5 rounded-lg border border-gray-200 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-600 transition hover:border-gray-300 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-500 disabled:cursor-not-allowed disabled:opacity-60 dark:border-white/10 dark:bg-dark-800 dark:text-slate-300 dark:hover:border-white/20 dark:hover:bg-dark-700 dark:hover:text-white';
@endphp

@if ($single)
    <div x-data="copyMarkdown('{{ url('ai/'.$single.'.md') }}')" class="inline-flex">
        <button x-on:click="copy()"
                x-bind:disabled="loading"
                @class([$triggerClass])>
            <span class="inline-flex h-3.5 w-3.5 items-center justify-center">
                <span x-show="!loading && !copied && !failed">
                    <x-icon name="clipboard-document" class="h-3.5 w-3.5" solid/>
                </span>
                <span x-show="loading" x-cloak>
                    <x-icon name="arrow-path" class="h-3.5 w-3.5 animate-spin" solid/>
                </span>
                <span x-show="copied" x-cloak>
                    <x-icon name="check" class="h-3.5 w-3.5 text-emerald-500" solid/>
                </span>
                <span x-show="failed" x-cloak>
                    <x-icon name="x-mark" class="h-3.5 w-3.5 text-rose-500" solid/>
                </span>
            </span>
            <span x-text="loading ? 'Copying…' : (copied ? 'Copied!' : (failed ? 'Failed' : 'Copy as markdown'))"></span>
        </button>
    </div>
@elseif ($multiple)
    <div x-data="copyMarkdown()"
         x-on:keydown.escape.window="open = false"
         x-on:click.outside="open = false"
         class="relative inline-flex">
        <button x-on:click="open = !open"
                x-bind:disabled="loading"
                @class([$triggerClass])>
            <span class="inline-flex h-3.5 w-3.5 items-center justify-center">
                <span x-show="!loading && !copied && !failed">
                    <x-icon name="clipboard-document" class="h-3.5 w-3.5" solid/>
                </span>
                <span x-show="loading" x-cloak>
                    <x-icon name="arrow-path" class="h-3.5 w-3.5 animate-spin" solid/>
                </span>
                <span x-show="copied" x-cloak>
                    <x-icon name="check" class="h-3.5 w-3.5 text-emerald-500" solid/>
                </span>
                <span x-show="failed" x-cloak>
                    <x-icon name="x-mark" class="h-3.5 w-3.5 text-rose-500" solid/>
                </span>
            </span>
            <span x-text="loading ? 'Copying…' : (copied ? 'Copied!' : (failed ? 'Failed' : 'Copy as markdown'))"></span>
            <x-icon name="chevron-down" class="h-3 w-3 opacity-60 transition-transform" x-bind:class="{ 'rotate-180': open }" solid/>
        </button>
        <div x-show="open"
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             x-cloak
             class="absolute right-0 top-[calc(100%+0.5rem)] z-50 min-w-44 overflow-hidden rounded-lg border border-gray-200 bg-white shadow-lg dark:border-white/10 dark:bg-dark-800">
            @foreach ($variants as $label => $variantSlug)
                <button x-on:click="copy('{{ url('ai/'.$variantSlug.'.md') }}')"
                        x-bind:disabled="loading"
                        class="flex w-full cursor-pointer items-center gap-2 px-3 py-1.5 text-left text-xs font-medium text-gray-600 transition hover:bg-gray-50 hover:text-gray-900 disabled:cursor-not-allowed disabled:opacity-60 dark:text-slate-300 dark:hover:bg-dark-700 dark:hover:text-white">
                    {{ $label }}
                </button>
            @endforeach
        </div>
    </div>
@endif
