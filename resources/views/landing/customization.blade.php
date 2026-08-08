<section id="customize" class="landing-section landing-section--ruled scroll-mt-10">
    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
        <div class="min-w-0 lg:col-span-5" data-reveal>
            <p class="landing-eyebrow">
                <span class="landing-eyebrow-index">04</span>
                Customization
            </p>
            <h2 class="landing-section-heading mt-5">Yours, <span class="landing-serif">all the way</span> down.</h2>
            <p class="landing-section-subheading mt-5">
                Soft customization lets you append, replace or remove any Tailwind class on any block of any component,
                straight from your
                <code class="font-mono text-[0.85em] text-pink-500">AppServiceProvider</code>
                and without forking a single template. Define scopes for opt-in variants, or extend the ones that
                already exist, including the scopes the package ships.
            </p>

            <ul class="dark:text-dark-300 mt-6 space-y-3 text-sm text-gray-600">
                <li class="flex items-start gap-2.5">
                    <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                    Every block is public API, and renames are documented migrations.
                </li>
                <li class="flex items-start gap-2.5">
                    <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                    Chains stack: two providers layer on top of each other, not over.
                </li>
                <li class="flex items-start gap-2.5">
                    <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                    Skeletons inherit it all, so placeholders match your look for free.
                </li>
            </ul>

            <a
                href="{{ route('documentation', ['customization', 'soft']) }}"
                wire:navigate
                class="landing-cta-primary mt-8"
            >
                Learn soft customization
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>

        <div class="min-w-0 lg:col-span-7" data-reveal style="--reveal-delay: 0.1s">
            <div class="landing-ide">
                <div class="flex items-center gap-3 border-b border-white/5 px-4 py-2.5">
                    <div class="landing-panel-chrome-dots" aria-hidden="true">
                        <span class="bg-white/15!"></span><span class="bg-white/15!"></span
                        ><span class="bg-white/15!"></span>
                    </div>
                    <span class="flex-1 text-center font-mono text-xs tracking-[0.04em] text-neutral-500">app · AppServiceProvider.php</span>
                    <span class="w-12"></span>
                </div>

                @php($lineCount = substr_count($customization, "\n") + 1)

                <div class="flex min-h-72 sm:min-h-80">
                    <div
                        class="shrink-0 py-3.5 pr-2 pl-3 text-right font-mono text-[0.7rem] leading-[1.55] text-neutral-600 select-none sm:py-4 sm:pr-3 sm:pl-4 sm:text-[0.8rem]"
                        aria-hidden="true"
                    >
                        @for ($line = 1; $line <= $lineCount; $line++)
                            <span class="block">{{ $line }}</span>
                        @endfor
                    </div>
                    <div class="landing-ide-source">
                        <x-code :contents="$customization" disable-copy />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
