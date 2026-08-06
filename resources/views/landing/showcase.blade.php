<section id="showcase" class="landing-section landing-section--ruled scroll-mt-10">
    <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12">
        <div class="min-w-0 lg:col-span-5" data-reveal>
            <div class="lg:sticky lg:top-24">
                <p class="landing-eyebrow">
                    <span class="landing-eyebrow-index">03</span>
                    Developer experience
                </p>
                <h2 class="landing-section-heading mt-5">
                    Nothing here is a <span class="landing-serif">screenshot.</span>
                </h2>
                <p class="landing-section-subheading mt-5">
                    The form on the right is a single Livewire component built entirely
                    from TallStackUI parts, with validation and feedback wired in. The
                    styled select hits a real endpoint and the pin code actually checks
                    what you type. Go ahead and try to break it.
                </p>

                <ul class="mt-8 space-y-3 text-sm text-gray-600 dark:text-dark-300">
                    <li class="flex items-start gap-2.5">
                        <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                        Errors, hints and labels come from the components.
                    </li>
                    <li class="flex items-start gap-2.5">
                        <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                        Async <code class="font-mono text-[0.85em] text-pink-500">select.styled</code> pointed at any endpoint.
                    </li>
                    <li class="flex items-start gap-2.5">
                        <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                        Dialogs and toasts through one trait: <code class="font-mono text-[0.85em] text-pink-500">Interactions</code>.
                    </li>
                </ul>

                <a href="{{ route('documentation', ['form', 'input']) }}"
                   wire:navigate
                   class="landing-cta-primary mt-8">
                    Browse the form components
                    <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            </div>
        </div>

        <div class="min-w-0 lg:col-span-7" data-reveal style="--reveal-delay: 0.1s">
            <livewire:welcome.form />
        </div>
    </div>
</section>
