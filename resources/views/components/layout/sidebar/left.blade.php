<livewire:documentation-settings />

<div
    class="relative z-40 lg:hidden"
    role="dialog"
    aria-modal="true"
    x-show="mobile"
    x-cloak
>
    <div
        x-show="mobile"
        x-transition:enter="transition-opacity duration-300 ease-linear"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-300 ease-linear"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="bg-opacity-75 fixed inset-0 bg-gray-400 backdrop-blur-sm"
    ></div>
    <div x-show="mobile" class="fixed inset-0 z-40 flex">
        <div
            x-show="mobile"
            x-transition:enter="transform transition duration-300 ease-in-out"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition duration-300 ease-in-out"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="dark:bg-dark-800 relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4"
            x-on:click.outside="mobile = false"
        >
            <div
                x-show="mobile"
                x-transition:enter="duration-300 ease-in-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="duration-300 ease-in-out"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute top-0 right-0 -mr-12 pt-2"
            >
                <button
                    x-on:click="mobile = false"
                    type="button"
                    class="relative ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Close sidebar</span>
                    <svg
                        class="h-6 w-6 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
            <div class="custom-scrollbar mt-5 h-0 flex-1 overflow-y-auto">
                <div class="mb-6 flex items-center justify-center">
                    <x-svg.banner class="h-14 w-14" />
                </div>
                <x-layout.navigation.main class="ml-8" />
            </div>
        </div>
    </div>
</div>
<div class="hidden lg:relative lg:block lg:flex-none">
    <div
        data-sidebar-scroll
        class="custom-scrollbar sticky top-14 -ml-0.5 h-[calc(100vh-3.5rem)] w-64 overflow-x-hidden overflow-y-auto py-6 pr-8 pl-0.5 xl:w-72 xl:pr-16"
    >
        <x-layout.navigation.main />
    </div>
</div>
