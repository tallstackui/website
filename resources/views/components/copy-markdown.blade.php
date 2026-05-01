@props(['slug' => null])

@if ($slug)
    <div x-data="copyMarkdown('{{ url('ai/'.$slug.'.md') }}')" class="inline-flex">
        <button x-on:click="copy()"
                x-bind:disabled="loading"
                class="group inline-flex cursor-pointer items-center gap-1.5 rounded-lg border border-gray-200 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-600 shadow-sm transition hover:border-gray-300 hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-500 disabled:cursor-not-allowed disabled:opacity-60 dark:border-white/10 dark:bg-dark-800 dark:text-slate-300 dark:hover:border-white/20 dark:hover:bg-dark-700 dark:hover:text-white">
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
@endif
