<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true" x-show="mobile" x-cloak>
    <div x-show="mobile"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
    <div x-show="mobile" class="fixed inset-0 z-40 flex">
        <div x-show="mobile"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative flex w-full max-w-xs flex-1 flex-col bg-white pb-4 pt-5" x-on:click.outside="mobile = false">
            <div x-show="mobile"
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="absolute right-0 top-0 -mr-12 pt-2">
                <button x-on:click="mobile = false" type="button" class="relative ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-5 h-0 flex-1 overflow-y-auto">
                <nav class="ml-8 text-base lg:text-sm">
                    <ul role="list" class="space-y-9">
                        <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Introduction</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/">Get started</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/installation">Installation</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Core concepts</h2>
                            <ul role="list"
                                class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/understanding-caching">Understanding caching</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/predicting-user-behavior">Predicting user behavior</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/basics-of-time-travel">Basics of time-travel</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/introduction-to-string-theory">Introduction to string theory</a>
                                </li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/the-butterfly-effect">The butterfly effect</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Advanced guides</h2>
                            <ul role="list"
                                class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/writing-plugins">Writing plugins</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/neuralink-integration">Neuralink integration</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/temporal-paradoxes">Temporal paradoxes</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/testing">Testing</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/compile-time-caching">Compile-time caching</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/predictive-data-generation">Predictive data generation</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-medium text-slate-900 font-display dark:text-white">API reference</h2>
                            <ul role="list"
                                class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-predict">CacheAdvance.predict()</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-flush">CacheAdvance.flush()</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-revert">CacheAdvance.revert()</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-regret">CacheAdvance.regret()</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Contributing</h2>
                            <ul role="list"
                                class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/how-to-contribute">How to contribute</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/architecture-guide">Architecture guide</a></li>
                                <li class="relative"><a
                                        class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/design-principles">Design principles</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>

<div class="hidden lg:relative lg:block lg:flex-none">
    <div class="sticky top-[4.75rem] -ml-0.5 h-[calc(100vh-4.75rem)] w-64 overflow-y-auto soft-scrollbar overflow-x-hidden py-16 pl-0.5 pr-8 xl:w-72 xl:pr-16">
        <nav class="text-base lg:text-sm">
            <ul role="list" class="space-y-9">
                <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Introduction</h2>
                    <ul role="list"
                        class="mt-2 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/">Get started</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/installation">Installation</a></li>
                    </ul>
                </li>
                <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Core concepts</h2>
                    <ul role="list"
                        class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/understanding-caching">Understanding caching</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/predicting-user-behavior">Predicting user behavior</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/basics-of-time-travel">Basics of time-travel</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/introduction-to-string-theory">Introduction to string theory</a>
                        </li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/the-butterfly-effect">The butterfly effect</a></li>
                    </ul>
                </li>
                <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Advanced guides</h2>
                    <ul role="list"
                        class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/writing-plugins">Writing plugins</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/neuralink-integration">Neuralink integration</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/temporal-paradoxes">Temporal paradoxes</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/testing">Testing</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/compile-time-caching">Compile-time caching</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/predictive-data-generation">Predictive data generation</a></li>
                    </ul>
                </li>
                <li><h2 class="font-medium text-slate-900 font-display dark:text-white">API reference</h2>
                    <ul role="list"
                        class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/cacheadvance-predict">CacheAdvance.predict()</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/cacheadvance-flush">CacheAdvance.flush()</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/cacheadvance-revert">CacheAdvance.revert()</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/cacheadvance-regret">CacheAdvance.regret()</a></li>
                    </ul>
                </li>
                <li><h2 class="font-medium text-slate-900 font-display dark:text-white">Contributing</h2>
                    <ul role="list"
                        class="mt-2 border-l-2 border-slate-100 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/how-to-contribute">How to contribute</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/architecture-guide">Architecture guide</a></li>
                        <li class="relative"><a
                                class="before:pointer-events-none before:absolute before:top-1/2 before:-left-1 block before:hidden w-full before:-translate-y-1/2 before:rounded-full before:bg-slate-300 text-slate-500 pl-3.5 before:h-1.5 before:w-1.5 hover:before:block hover:text-slate-600 dark:before:bg-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/design-principles">Design principles</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

