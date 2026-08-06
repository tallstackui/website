<section class="landing-section landing-section--ruled">
    <div class="mb-[clamp(2.5rem,5vh,4rem)] max-w-3xl" data-reveal>
        <p class="landing-eyebrow">
            <span class="landing-eyebrow-index">05</span>
            Everywhere
        </p>
        <h2 class="landing-section-heading mt-5">
            Built for Livewire. Works with <span class="landing-serif">vanilla Blade</span>.
        </h2>
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6" data-reveal>
            <span class="landing-panel-kicker">plain blade</span>
            <h3 class="landing-panel-title">No Livewire? No problem.</h3>
            <p class="landing-panel-body">
                Give a form component a <code class="font-mono text-[0.85em]">name</code> instead
                of a <code class="font-mono text-[0.85em]">wire:model</code> and it renders a hidden
                input your controller reads like any other field. Currency, date, pin, tags,
                selects and even the calendar work this way.
            </p>
            <div class="mt-5">
                <x-code language="blade" :contents="$form" disable-copy />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6" data-reveal style="--reveal-delay: 0.08s">
            <span class="landing-panel-kicker">interactions</span>
            <h3 class="landing-panel-title">Dialogs and toasts, one line.</h3>
            <p class="landing-panel-body">
                Confirm, notify and react from PHP or JavaScript through the same API.
                Try it, this one is live too.
            </p>
            <div class="mt-5">
                <x-code language="js" :contents="$interactions" disable-copy />
            </div>
            <div class="mt-4 flex flex-wrap gap-2" x-data>
                <x-button color="emerald" icon="bell" x-on:click="$tsui.interaction('toast').success('Shipped!', 'That toast came from one line of JavaScript.').send()">Toast</x-button>
                <x-button color="violet" icon="chat-bubble-left-right" x-on:click="$tsui.interaction('dialog').info('One line.', 'Dialogs work the same way, from PHP or JavaScript.').send()">Dialog</x-button>
            </div>
        </article>
    </div>
</section>
