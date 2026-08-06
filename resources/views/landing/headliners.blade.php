<section id="new" class="landing-section landing-section--ruled scroll-mt-10">
    <div class="mb-[clamp(2.5rem,5vh,4rem)] max-w-3xl" data-reveal>
        <p class="landing-eyebrow">
            <span class="landing-eyebrow-index">01</span>
            New in 4.0
        </p>
        <h2 class="landing-section-heading mt-5">
            Six new components. <span class="landing-serif">Zero</span> new dependencies.
        </h2>
        <p class="landing-section-subheading mt-5">
            Charts, a rich text editor, galleries, QR codes and more, without pulling in
            a single extra JavaScript package. Everything below is rendered live by the
            components themselves.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-6">
        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-4" data-reveal>
            <span class="landing-panel-kicker">&lt;x-chart /&gt;</span>
            <h3 class="landing-panel-title">Charts, no library attached</h3>
            <p class="landing-panel-body">
                Area, line, bar, pie and donut types that mix in a single plot, with dual
                axes, stacked series, tooltips and a toggling legend.
            </p>
            <div class="mt-6">
                <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']"
                         type="line"
                         :series="[
                             ['name' => 'Views', 'data' => [14, 22, 18, 30, 26, 38, 34, 47]],
                             ['name' => 'Installs', 'data' => [8, 11, 16, 13, 21, 24, 20, 29]],
                             ['name' => 'Stars', 'data' => [4, 7, 6, 12, 10, 15, 19, 17]],
                         ]"
                         grid
                         legend
                         tooltip
                         markers
                         height="250" />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-2" data-reveal style="--reveal-delay: 0.1s">
            <span class="landing-panel-kicker">&lt;x-qr-code /&gt;</span>
            <h3 class="landing-panel-title">QR codes, ready to share</h3>
            <p class="landing-panel-body">
                Turn any link into a QR code, with optional watermark, colors and sizes.
                Copy it as PNG or download it as SVG.
            </p>
            <div class="mt-6 flex justify-center">
                <x-qr-code link="https://tallstackui.com" size="lg" watermark="4.0" copy download="svg" />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-3" data-reveal>
            <span class="landing-panel-kicker">&lt;x-editor /&gt;</span>
            <h3 class="landing-panel-title">A rich text editor in pure Blade</h3>
            <p class="landing-panel-body">
                Writes HTML or Markdown and autoformats as you type.
                Go ahead, it's real.
            </p>
            <div class="mt-6">
                <x-editor name="landing_editor" :toolbar="['style', 'bold', 'italic', 'underline', 'unordered-list', 'blockquote', 'link']" min-height="11rem" max-height="16rem" />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-3" data-reveal style="--reveal-delay: 0.1s">
            <span class="landing-panel-kicker">&lt;x-gallery /&gt;</span>
            <h3 class="landing-panel-title">Galleries with a lightbox</h3>
            <p class="landing-panel-body">
                Grid, masonry or feature layouts, captions, keyboard navigation.
                Click any image to open the built-in lightbox.
            </p>
            <div class="mt-6">
                <x-gallery masonry
                           :columns="3"
                           clickable
                           navigable
                           :images="collect(range(1, 6))->map(fn (int $image) => [
                               'src' => asset('assets/images/avatar/'.$image.'.jpg'),
                               'alt' => 'Gallery image '.$image,
                           ])->all()" />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-2" data-reveal>
            <span class="landing-panel-kicker">&lt;x-spinner /&gt;</span>
            <h3 class="landing-panel-title">Thirteen ways to wait</h3>
            <p class="landing-panel-body">
                Thirteen animated variants across four sizes and 29 colors, with an
                optional label. None of them bind any state.
            </p>
            <div class="mt-6 grid grid-cols-3 gap-y-6 place-items-center">
                <x-spinner />
                <x-spinner gradient color="pink" />
                <x-spinner ping color="violet" />
                <x-spinner dots color="emerald" />
                <x-spinner bars color="amber" />
                <x-spinner thinking color="sky" />
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-2" data-reveal style="--reveal-delay: 0.08s">
            <span class="landing-panel-kicker">&lt;x-upload.async /&gt;</span>
            <h3 class="landing-panel-title">Uploads that skip Livewire</h3>
            <p class="landing-panel-body">
                Large files go straight to your own controller in small chunks, so
                uploads no longer have to fit a request limit. Around 1&nbsp;GB is
                the target.
            </p>
            <div class="mt-6 rounded-lg border border-dashed border-gray-300 p-4 dark:border-dark-600">
                <div class="flex items-center gap-3">
                    <x-icon name="document-arrow-up" class="h-8 w-8 text-gray-400 dark:text-dark-500" />
                    <div class="min-w-0 flex-1">
                        <p class="truncate font-mono text-xs text-gray-600 dark:text-dark-300">backup-2026.zip</p>
                        <p class="font-mono text-[0.65rem] text-gray-400 dark:text-dark-500">912 MB · chunk 214/380</p>
                        <div class="mt-2 h-1 overflow-hidden rounded-full bg-gray-200 dark:bg-dark-700">
                            <div class="landing-upload-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article x-data="spotlight" x-on:mousemove="move($event)" class="landing-panel landing-panel--hover p-6 lg:col-span-2" data-reveal style="--reveal-delay: 0.16s">
            <span class="landing-panel-kicker">skeleton</span>
            <h3 class="landing-panel-title">Placeholders, shaped right</h3>
            <p class="landing-panel-body">
                Card, Stats, Table, List, Step and Chart accept a
                <code class="font-mono text-[0.85em]">skeleton</code> flag. The placeholder
                takes the same shape and customizations as the real component.
            </p>
            <div class="mt-6">
                <x-table :headers="[
                    ['index' => 'component', 'label' => 'Component'],
                    ['index' => 'status', 'label' => 'Status'],
                ]" skeleton="3" />
            </div>
        </article>
    </div>
</section>
