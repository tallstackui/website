<section id="theme" class="landing-section landing-section--ruled scroll-mt-10">
    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
        <div class="min-w-0 lg:col-span-5" data-reveal>
            <p class="landing-eyebrow">
                <span class="landing-eyebrow-index">02</span>
                Theme
            </p>
            <h2 class="landing-section-heading mt-5">
                Dark mode,
                <span class="landing-serif">actually</span>
                dark.
            </h2>
            <p class="landing-section-subheading mt-5">
                The old dark palette leaned cold and blue. 4.0 ships a pure
                neutral scale anchored near black, with a visible step between
                page, surface and border. Secondary is now a true Violet accent
                next to the Indigo primary, so overriding your brand colors
                repaints accents, never the chrome.
            </p>

            <div class="mt-8 flex flex-wrap items-center gap-3">
                <span
                    class="dark:border-dark-700 dark:text-dark-300 inline-flex items-center gap-2 rounded-full border border-gray-200 py-1 pr-3 pl-1.5 font-mono text-[0.68rem] text-gray-600"
                >
                    <span class="h-4 w-4 rounded-full bg-indigo-500"></span>
                    primary · indigo
                </span>
                <span
                    class="dark:border-dark-700 dark:text-dark-300 inline-flex items-center gap-2 rounded-full border border-gray-200 py-1 pr-3 pl-1.5 font-mono text-[0.68rem] text-gray-600"
                >
                    <span class="h-4 w-4 rounded-full bg-violet-500"></span>
                    secondary · violet
                </span>
            </div>

            <div
                class="dark:border-dark-700 mt-8 flex items-center gap-4 rounded-xl border border-gray-200 p-4"
            >
                <x-theme-switch simple />
                <p class="dark:text-dark-400 text-sm text-gray-500">
                    This page runs on the 4.0 palette. Flip it.
                </p>
            </div>
        </div>

        <div
            class="min-w-0 lg:col-span-7"
            data-reveal
            style="--reveal-delay: 0.1s"
        >
            <div
                class="landing-ladder shadow-[0_60px_120px_-60px_rgba(0,0,0,0.7)]"
            >
                <div
                    style="background: oklch(0.145 0 0)"
                    class="landing-ladder-step"
                >
                    <span>
                        <b>dark-900</b>
                        · page background
                    </span>
                    <span>oklch(0.145 0 0)</span>
                </div>
                <div
                    style="background: oklch(0.185 0 0)"
                    class="landing-ladder-step"
                >
                    <span>
                        <b>dark-800</b>
                        · component surfaces
                    </span>
                    <span>oklch(0.185 0 0)</span>
                </div>
                <div
                    style="background: oklch(0.253 0 0)"
                    class="landing-ladder-step"
                >
                    <span>
                        <b>dark-700</b>
                        · borders, dividers, tracks
                    </span>
                    <span>oklch(0.253 0 0)</span>
                </div>
                <div
                    style="background: oklch(0.36 0 0)"
                    class="landing-ladder-step"
                >
                    <span>
                        <b>dark-600</b>
                        · hover and raised states
                    </span>
                    <span>oklch(0.36 0 0)</span>
                </div>
                <div
                    class="landing-ladder-step"
                    style="background: oklch(0.185 0 0)"
                >
                    <span class="text-dark-400">
                        Input borders sit at
                        <b class="text-dark-100">dark-600/50</b>
                        , softer than a solid line.
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
