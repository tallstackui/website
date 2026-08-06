<section class="relative pt-[clamp(3.5rem,9vh,7rem)] pb-[clamp(4rem,10vh,7rem)]">
    <div class="grid grid-cols-1 items-center gap-14 lg:grid-cols-12">
        <div class="min-w-0 lg:col-span-6">
            <p class="landing-eyebrow landing-rise landing-rise--1">
                <span class="landing-eyebrow-index">Stable version: 4.0</span>
            </p>

            <h1 class="landing-headline mt-6 landing-rise landing-rise--2">
                Beautifully <span class="landing-serif landing-serif--upright">crafted</span> components for your next <span class="text-pink-500">TALL Stack</span> idea.
            </h1>

            <p class="landing-section-subheading mt-6 text-[1.05rem] landing-rise landing-rise--3">
                TallStackUI gives you 80+ Blade components for Laravel, Livewire,
                Alpine.js, and Tailwind CSS.
                <span class="landing-mark">It's 100% free, open source, and there's no
                Pro tier hiding behind a paywall.</span>
            </p>

            <div class="mt-9 flex flex-wrap items-center gap-3 landing-rise landing-rise--4">
                <a href="{{ route('documentation', ['installation']) }}"
                   wire:navigate
                   class="landing-cta-primary">
                    Start building
                    <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
                <a href="#new" class="landing-cta-ghost">
                    See what's new
                    <x-icon name="arrow-down" class="h-4 w-4" />
                </a>
            </div>
        </div>

        <div class="min-w-0 lg:col-span-6 landing-rise landing-rise--5">
            <div class="landing-panel shadow-[0_60px_120px_-60px_rgba(0,0,0,0.5)]">
                <div class="landing-panel-chrome">
                    <div class="landing-panel-chrome-dots" aria-hidden="true">
                        <span></span><span></span><span></span>
                    </div>
                    <span class="landing-panel-chrome-title">tallstackui.com</span>
                </div>

                <div class="space-y-5 p-5 sm:p-6">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <x-stats :number="188571" title="Downloads" icon="arrow-down-tray" animated increase shadowless bordered :chart="collect(range(1, 8))->map(fn () => rand(6, 46))->all()" />
                        <x-stats :number="84" title="Components" icon="squares-2x2" color="violet" animated shadowless bordered :chart="collect(range(1, 8))->map(fn () => rand(10, 50))->all()" />
                    </div>

                    <div class="-mx-8">
                        <x-chart :series="[
                                     ['name' => 'v2', 'data' => collect(range(1, 8))->map(fn () => rand(6, 34))->all()],
                                     ['name' => 'v3', 'data' => collect(range(1, 8))->map(fn () => rand(14, 48))->all()],
                                     ['name' => 'v4', 'data' => collect(range(1, 8))->map(fn () => rand(22, 64))->all()],
                                 ]"
                                 tooltip
                                 height="170" />
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <x-input name="hero_project" label="Project" value="tallstack/app" icon="folder" />
                        <x-select.styled name="hero_stack" label="Stack" :options="['Livewire 4', 'Blade only']" value="Livewire 4" />
                    </div>

                    <div class="-mx-5 flex flex-wrap items-center justify-between gap-4 border-t border-gray-200 px-5 pt-5 sm:-mx-6 sm:px-6 dark:border-dark-700">
                        <x-toggle name="hero_deploy" label="Auto deploy" checked />
                        <x-rating :rate="5" />
                        <x-button round icon="rocket-launch" position="right">Publish</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
