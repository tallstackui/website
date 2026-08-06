<section class="landing-section">
    <div class="landing-cta-final" data-reveal>
        <p class="landing-eyebrow justify-center">
            <span class="landing-eyebrow-index">TallStackUI</span>
        </p>
        <h2 class="landing-cta-final-headline mt-6">
            Ship something <span class="landing-serif">beautiful.</span>
        </h2>
        <p class="mx-auto mt-6 max-w-xl text-base leading-relaxed text-neutral-400">
            Drop it in, make it yours, ship it.
        </p>
        <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
            <a href="{{ route('documentation', ['installation']) }}"
               wire:navigate
               class="landing-cta-primary">
                Get started
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
            <button type="button"
                    class="landing-install"
                    x-data="{ copied: false }"
                    x-on:click="$tsui.copy('composer require tallstackui/tallstackui').then(() => { copied = true; setTimeout(() => copied = false, 1800) })">
                <span class="landing-install-prompt" aria-hidden="true">$</span>
                <span>composer require tallstackui/tallstackui</span>
                <span class="landing-install-icon">
                    <x-icon name="clipboard-document" class="h-4 w-4" x-show="!copied" />
                    <x-icon name="check" class="h-4 w-4 text-green-500" x-show="copied" x-cloak />
                </span>
            </button>
        </div>
    </div>
</section>
