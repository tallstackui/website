<header class="dark:border-dark-700/60 dark:bg-dark-900/85 sticky top-0 z-40 border-b border-gray-200 bg-white/85 backdrop-blur-md">
    <div class="flex h-14 items-center gap-4 px-4 sm:px-6 lg:px-8">
        <div class="flex lg:hidden">
            <button x-on:click="mobile = true" type="button" class="relative" aria-label="Open navigation">
                <svg
                    aria-hidden="true"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="2"
                    stroke-linecap="round"
                    class="dark:stroke-dark-400 h-6 w-6 stroke-gray-500"
                >
                    <path d="M4 7h16M4 12h16M4 17h16"></path>
                </svg>
            </button>
        </div>

        <div class="flex items-center gap-3">
            <a href="/" aria-label="TallStackUI home">
                <x-svg.banner class="h-7 w-9" />
            </a>
            <span class="hidden rounded-full border border-pink-500/30 bg-pink-500/10 px-2 py-0.5 font-mono text-[0.6rem] font-semibold tracking-[0.12em] text-pink-500 uppercase sm:inline-flex">
                {{ $version }}
            </span>
        </div>

        <div class="ml-auto flex items-center gap-4">
            <button
                type="button"
                x-on:click="document.querySelector('#docsearch').firstChild.click()"
                class="dark:border-dark-700 dark:text-dark-500 dark:hover:border-dark-600 dark:hover:text-dark-400 hidden w-56 items-center gap-2 rounded-lg border border-gray-200 px-3 py-1.5 text-sm text-gray-400 transition hover:border-gray-300 hover:text-gray-500 lg:flex"
            >
                <x-icon name="magnifying-glass" class="h-4 w-4" />
                <span class="flex-1 text-left text-[0.82rem]">Search docs...</span>
                <span
                    x-data="{ mac: /mac/i.test(navigator.userAgent) }"
                    class="dark:border-dark-700 dark:text-dark-500 rounded border border-gray-200 px-1.5 py-0.5 font-mono text-[0.6rem] text-gray-400"
                    x-text="mac ? '⌘K' : 'Ctrl K'"
                ></span>
            </button>
            <x-icon
                x-on:click="document.querySelector('#docsearch').firstChild.click()"
                name="magnifying-glass"
                class="dark:text-dark-400 block h-5 w-5 cursor-pointer text-gray-500 lg:hidden"
            />
            <x-theme-switch simple only-icons />
            <x-github repository />
        </div>
    </div>
</header>
