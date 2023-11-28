<header class="top-0 z-50 flex items-center justify-between bg-white px-4 py-5 shadow-md shadow-slate-900/5 dark:bg-dark-900 dark:shadow-none sm:px-6 lg:px-8">
    <div class="hidden lg:block">
        <x-svg.banner class="h-8 w-10" />
    </div>
    <div class="mr-6 flex lg:hidden">
        <button x-on:click="mobile = true" type="button" class="relative" aria-label="Open navigation">
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                 class="h-6 w-6 stroke-slate-500">
                <path d="M4 7h16M4 12h16M4 17h16"></path>
            </svg>
        </button>
    </div>
    <div class="relative flex basis-0 items-center justify-end gap-6 sm:gap-8 md:flex-grow">
        <div id="docsearch" class="hidden"></div>
        <x-icon x-on:click="document.querySelector('#docsearch').firstChild.click()" name="magnifying-glass" class="h-6 w-6 cursor-pointer text-gray-500 hidden lg:block" />
        <x-icon x-on:click="darkTheme = false" name="sun" class="h-6 w-6 cursor-pointer text-gray-500" x-show="darkTheme" />
        <x-icon x-on:click="darkTheme = true" name="moon" class="h-6 w-6 cursor-pointer text-gray-500" x-show="!darkTheme" />
        <x-github />
    </div>
</header>
