<livewire:documentation-settings :$version />

<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true" x-show="mobile" x-cloak>
    <div x-show="mobile"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-75 backdrop-blur-sm"></div>
    <div x-show="mobile" class="fixed inset-0 z-40 flex">
        <div x-show="mobile"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4 dark:bg-dark-800" x-on:click.outside="mobile = false">
            <div x-show="mobile"
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute top-0 right-0 -mr-12 pt-2">
                <button x-on:click="mobile = false" type="button" class="relative ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-5 h-0 flex-1 overflow-y-auto custom-scrollbar">
                <div class="flex justify-center items-center mb-6">
                    <x-svg.banner class="w-14 h-14" />
                </div>
                <x-layout.navigation.version class="ml-8" />
            </div>
        </div>
    </div>
</div>
<div class="hidden lg:relative lg:block lg:flex-none">
    <div data-sidebar-scroll class="sticky top-14 -ml-0.5 h-[calc(100vh-3.5rem)] w-64 overflow-y-auto custom-scrollbar overflow-x-hidden py-6 pl-0.5 pr-8 xl:w-72 xl:pr-16">
        <x-layout.navigation.version />
    </div>
</div>
