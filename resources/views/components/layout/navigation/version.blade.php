<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <div class="mb-4 pr-4 space-y-2 sm:flex-1 sm:pr-0">
        <livewire:version-selector />
        <div class="relative bg-white dark:bg-slate-900">
            <button type="button"
                    x-on:click="document.querySelector('#docsearch').firstChild.click()"
                    class="hidden w-full items-center rounded-md pr-3 pl-2 text-sm leading-6 text-slate-400 shadow-sm ring-1 ring-slate-300 py-1.5 hover:bg-slate-100 dark:highlight-white/5 dark:bg-slate-800 dark:ring-slate-800 lg:flex dark:hover:bg-slate-700">
                <x-icon name="magnifying-glass" class="mr-4 h-5 w-5" />Quick search...
                <div x-data="{ isWindows: /win/i.test(navigator.userAgent), isMac: /mac/i.test(navigator.userAgent) }" class="ml-auto pl-3 text-xs font-semibold">
                    <div x-show="isWindows">Ctrl K</div>
                    <div x-show="isMac" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-command" viewBox="0 0 16 16">
                            <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"/>
                            <span class="ml-2">K</span>
                        </svg>
                    </div>
                </div>
            </button>
        </div>
        <x-button icon="wrench-screwdriver" color="pink" class="w-full uppercase" x-on:click="$modalOpen('prefix-modal')" xs>
            {{ __('CONFIGURE DOCUMENTATION') }}
        </x-button>
    </div>
    @include('components.layout.navigation.version.'.$version)
</nav>
