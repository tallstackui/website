@php
    $components = [
        'Alert', 'Avatar', 'Avatar Group', 'Back to Top', 'Badge', 'Banner',
        'Boolean', 'Breadcrumbs', 'Calendar', 'Card', 'Carousel', 'Clipboard',
        'Environment', 'Errors', 'Icon', 'Kbd', 'Key-Value', 'Link', 'List',
        'Stats', 'Table', 'Timeline', 'Tooltip', 'Button', 'Button Circle',
        'Button Group', 'Autocomplete', 'Checkbox', 'Color Picker', 'Currency',
        'Date Picker', 'Hint', 'Input', 'Input Select', 'Label', 'Number',
        'Password', 'Pin', 'Radio', 'Range', 'Select Native', 'Select Styled',
        'Tag', 'Textarea', 'Time Picker', 'Toggle', 'Upload', 'Command Palette',
        'Dialog', 'Dropdown', 'Loading', 'Modal', 'Slide', 'Toast', 'Accordion',
        'Dial', 'Layout', 'Sidebar', 'Step', 'Tab', 'Progress Bar',
        'Progress Circle', 'Rating', 'Reaction', 'Signature', 'Theme Switch',
    ];

    $marqueeTop = array_slice($components, 0, ceil(count($components) / 2));
    $marqueeBottom = array_slice($components, ceil(count($components) / 2));

    $features = [
        ['icon' => 'bolt', 'title' => 'Ready-to-use', 'description' => '50+ polished components. New ones land every release.'],
        ['icon' => 'wrench', 'title' => 'Easy installation', 'description' => 'Install once, ship in minutes. No config, no boilerplate.'],
        ['icon' => 'paint-brush', 'title' => 'Soft customization', 'description' => "Override any class, anywhere, at runtime. You haven't seen this before."],
        ['icon' => 'wrench-screwdriver', 'title' => 'Continuous updates', 'description' => 'We ship a lot. Something new lands almost every week.'],
    ];

    $stats = [
        ['value' => '50+', 'label' => 'Blade components'],
        ['value' => '150K+', 'label' => 'Downloads and counting'],
        ['value' => 'MIT', 'label' => 'Open source, forever'],
    ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased" x-data="tallstackui_darkTheme({ default: 'dark' })">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TallStackUI — Beautifully crafted components for your next TALL Stack idea</title>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="{{ config('app.url') }}">
    <meta name="twitter:creator" content="@devajmeireles">
    <meta name="twitter:title" content="TallStackUI">
    <meta name="twitter:description" content="TallStackUI: TALL Stack components ready-to-use.">
    <meta name="twitter:image" content="{{ asset('assets/images/og.png') }}">

    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:title" content="TallStackUI: TALL Stack components ready-to-use." />
    <meta property="og:image" content="{{ asset('assets/images/og.png') }}" />

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" >
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/android-chrome-512x512.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800|instrument-serif:400,400i|bricolage-grotesque:400,500,600,700,800&display=swap" rel="stylesheet"/>
    <x-google-analytics />

    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="landing min-h-full"
      x-bind:class="{ 'dark text-slate-100' : darkTheme, 'text-slate-900' : !darkTheme }"
      x-cloak>
    <x-top-bar />
    <x-toast />
    <x-dialog />
    <div id="docsearch" style="display: none !important;"></div>

    <div class="landing-shell">
        <div class="landing-noise"></div>

        <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">

            <nav class="landing-nav" aria-label="Global">
                <div class="flex items-center gap-3">
                    <x-svg.banner class="h-8 w-10" />
                </div>

                <div class="flex items-center gap-3">
                    <x-icon x-on:click="mode = 'light'" name="sun"  class="h-6 w-6 cursor-pointer text-yellow-500" x-show="darkTheme" />
                    <x-icon x-on:click="mode = 'dark'"  name="moon" class="h-6 w-6 cursor-pointer text-blue-500"   x-show="!darkTheme" />
                    <x-github repository />
                </div>
            </nav>

            <section class="landing-hero">
                <div class="mx-auto max-w-4xl text-center">
                    <a href="{{ $discord }}" target="_blank" rel="noopener" class="landing-eyebrow">
                        v3.5 is out, hop on the Discord
                    </a>

                    <h1 class="landing-headline mt-6">
                        Beautifully crafted components for your next <span class="landing-headline-accent">TALL Stack</span> idea.
                    </h1>

                    <p class="landing-section-subheading mx-auto mt-6 max-w-2xl text-lg text-slate-700 dark:text-slate-300">
                        TallStackUI gives you <b>50+ Blade components</b> for Laravel,
                        Livewire, Alpine.js, and Tailwind CSS. It's
                        <span class="landing-handwritten font-bold">100% free</span>, open source,
                        and there's no Pro tier hiding behind a paywall.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                        <a href="{{ route('documentation', ['v3', 'installation']) }}"
                           wire:navigate
                           class="landing-cta-primary">
                            Get Started
                            <x-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                        <a href="https://github.com/tallstackui/tallstackui"
                           target="_blank"
                           rel="noopener"
                           class="landing-cta-secondary landing-cta-secondary--sm">
                            <x-icon name="star" class="h-3.5 w-3.5" />
                            Star on GitHub
                        </a>
                    </div>

                    <div class="mt-6 flex justify-center">
                        <button type="button"
                                class="landing-terminal"
                                aria-label="Copy install command"
                                x-data="{ copied: false }"
                                x-on:click="
                                    navigator.clipboard.writeText('composer require tallstackui/tallstackui');
                                    copied = true;
                                    setTimeout(() => copied = false, 1800);
                                ">
                            <span class="landing-terminal-prompt">$</span>
                            <span class="landing-terminal-command">composer require tallstackui/tallstackui</span>
                            <span class="landing-terminal-action">
                                <x-icon x-show="!copied" name="clipboard-document" class="h-4 w-4" />
                                <x-icon x-show="copied"  x-cloak name="check" class="h-4 w-4 text-emerald-400" />
                            </span>
                        </button>
                    </div>
                </div>
            </section>

            <section class="relative -mx-6 mt-12 lg:-mx-8">
                <div class="px-6 lg:px-8">
                    <p class="text-center text-xs font-semibold uppercase tracking-widest text-pink-500 dark:text-pink-400">
                        50+ components, ready when you are
                    </p>
                </div>

                <div class="landing-marquee-mask mt-8">
                    <div class="landing-marquee-rotor">
                        <div class="landing-marquee-track landing-marquee-track--left">
                            @foreach (array_merge($marqueeTop, $marqueeTop) as $name)
                                <span class="landing-marquee-pill">{{ $name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="landing-marquee-mask mt-3">
                    <div class="landing-marquee-rotor">
                        <div class="landing-marquee-track landing-marquee-track--right">
                            @foreach (array_merge($marqueeBottom, $marqueeBottom) as $name)
                                <span class="landing-marquee-pill">{{ $name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="landing-section">
                <div class="landing-section-header">
                    <span class="landing-eyebrow">The catalog</span>
                    <h2 class="landing-section-heading">Crafted with <span class="landing-handwritten">attention to every detail</span>.</h2>
                    <p class="landing-section-subheading">
                        From the smallest icon to a full table, every component is polished, accessible, and ready to drop into your Livewire app.
                    </p>
                </div>

                <div class="landing-bento">
                    <article class="landing-bento-cell landing-bento-cell--3x1">
                        <span class="landing-bento-cell-eyebrow">Display</span>
                        <h3 class="landing-bento-cell-title">Alerts</h3>
                        <p class="landing-bento-cell-body">Light, themed, easy to dismiss. Always on point.</p>
                        <div class="landing-bento-stage space-y-2">
                            <x-alert>Your text goes here...</x-alert>
                            <x-alert color="pink" icon="sparkles">With a lot of color variations</x-alert>
                            <x-alert color="emerald" icon="check-circle" light close title="Light">
                                And different styles!
                            </x-alert>
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--3x1">
                        <span class="landing-bento-cell-eyebrow">Interaction</span>
                        <h3 class="landing-bento-cell-title">Buttons that fit anywhere</h3>
                        <p class="landing-bento-cell-body">Solid, outline, light, flat. With icons, loading, tooltips. All out of the box.</p>
                        <div class="landing-bento-stage flex flex-wrap items-center gap-2">
                            <x-button color="pink">Save</x-button>
                            <x-button color="pink" outline>Cancel</x-button>
                            <x-button color="emerald" icon="check">Confirm</x-button>
                            <x-button color="indigo" light>Light</x-button>
                            <x-button color="slate" flat>Flat</x-button>
                            <x-button color="amber" icon="bolt" sm>Boost</x-button>
                            <x-button color="pink" icon="arrow-right" position="right">Next</x-button>
                            <x-button.circle icon="trash" color="red" />
                            <x-button.circle icon="cog-6-tooth" color="slate" outline />
                            <x-button.circle icon="heart" color="pink" light />
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--2x1">
                        <span class="landing-bento-cell-eyebrow">Media</span>
                        <h3 class="landing-bento-cell-title">Avatar group</h3>
                        <div class="landing-bento-stage flex items-center">
                            <div class="landing-avatar-stack">
                                @foreach (range(6, 10) as $idx)
                                    <img src="{{ asset('assets/images/avatar/' . $idx . '.jpg') }}"
                                         alt=""
                                         class="landing-avatar h-10 w-10 rounded-full object-cover" />
                                @endforeach
                                <div class="landing-avatar flex h-10 w-10 items-center justify-center rounded-full bg-pink-500 text-xs font-bold text-white">
                                    +12
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--2x1">
                        <span class="landing-bento-cell-eyebrow">Input</span>
                        <h3 class="landing-bento-cell-title">Date picker</h3>
                        <div class="landing-bento-stage">
                            <x-date label="Pick a date" name="bento_date" :value="now()->format('Y-m-d')" format="MMMM, DD, YYYY" />
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--2x1">
                        <span class="landing-bento-cell-eyebrow">Form</span>
                        <h3 class="landing-bento-cell-title">Toggle &amp; rating</h3>
                        <div class="landing-bento-stage">
                            <livewire:welcome.feedback />
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--3x1">
                        <span class="landing-bento-cell-eyebrow">Form</span>
                        <h3 class="landing-bento-cell-title">Tag input</h3>
                        <p class="landing-bento-cell-body">Multiple values, prefix support, array binding.</p>
                        <div class="landing-bento-stage">
                            <x-tag label="Frameworks"
                                   prefix="#"
                                   hint="Press enter to add a new tag"
                                   :value="['Laravel', 'Livewire', 'Alpine.js', 'Tailwind']" />
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--3x1">
                        <span class="landing-bento-cell-eyebrow">Form</span>
                        <h3 class="landing-bento-cell-title">Color picker</h3>
                        <p class="landing-bento-cell-body">Pick from a slider or a small palette. Your call.</p>
                        <div class="landing-bento-stage">
                            <x-color label="Choose a brand color" picker selectable />
                        </div>
                    </article>

                    <article class="landing-bento-cell landing-bento-cell--6x1">
                        <div>
                            <span class="landing-bento-cell-eyebrow">Data</span>
                            <h3 class="landing-bento-cell-title mt-1">Tables. Paginated and live.</h3>
                        </div>
                        <div class="landing-bento-stage">
                            <livewire:welcome.table />
                        </div>
                    </article>

                </div>
            </section>

            <section class="landing-section">
                <div class="landing-section-header landing-section-header--centered">
                    <span class="landing-eyebrow">Philosophy</span>
                    <h2 class="landing-section-heading">What makes TallStackUI different?</h2>
                    <p class="landing-section-subheading">
                        Built by devs, for devs. Every detail is meant to feel right at home in a <span class="whitespace-nowrap">TALL Stack</span> project.
                    </p>
                </div>

                <div class="landing-feature-grid">
                    @foreach ($features as $feature)
                        <article class="landing-feature-card"
                                 x-data
                                 x-on:mousemove="
                                     const r = $el.getBoundingClientRect();
                                     $el.style.setProperty('--spot-x', ($event.clientX - r.left) + 'px');
                                     $el.style.setProperty('--spot-y', ($event.clientY - r.top) + 'px');
                                 ">
                            <div class="landing-feature-icon">
                                <x-icon :name="$feature['icon']" class="h-5 w-5" />
                            </div>
                            <h3 class="landing-feature-title">{{ $feature['title'] }}</h3>
                            <p class="landing-feature-desc">{{ $feature['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="landing-section">
                <div class="grid items-start gap-12 lg:grid-cols-12">
                    <div class="lg:col-span-5 lg:sticky lg:top-24">
                        <span class="landing-eyebrow">Showcase</span>
                        <h2 class="landing-section-heading mt-5">
                            <span class="landing-handwritten">Everything you need</span> in a single place to start your next <span class="landing-headline-accent">TALL Stack</span> project.
                        </h2>
                        <p class="landing-section-subheading mt-5 text-slate-700 dark:text-slate-300">
                            Some of our <b class="text-pink-600 dark:text-pink-300">50+ Blade components</b>
                            in action. Interactive, real, ready to copy. The form on the right is built entirely from
                            TallStackUI parts, wired into a single Livewire class.
                        </p>

                        <ul class="mt-8 space-y-3 text-sm text-slate-700 dark:text-slate-300">
                            <li class="flex items-center gap-2">
                                <x-icon name="check" class="h-4 w-4 text-pink-500" />
                                Inputs, selects, pin codes, color pickers, toggles.
                            </li>
                            <li class="flex items-center gap-2">
                                <x-icon name="check" class="h-4 w-4 text-pink-500" />
                                Async <code class="rounded bg-pink-500/10 px-1 py-0.5 text-pink-600 dark:text-pink-300">select.styled</code> hitting any endpoint.
                            </li>
                            <li class="flex items-center gap-2">
                                <x-icon name="check" class="h-4 w-4 text-pink-500" />
                                Validation, error summary, dialog feedback.
                            </li>
                        </ul>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="{{ route('documentation', ['v3', 'form', 'input']) }}"
                               wire:navigate
                               class="landing-cta-primary">
                                Browse form components
                                <x-icon name="arrow-right" class="h-4 w-4" />
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <livewire:welcome.form />
                    </div>
                </div>
            </section>

            <section class="landing-section">
                <div class="grid items-center gap-12 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <span class="landing-eyebrow">Customization</span>
                        <h2 class="landing-section-heading mt-5">
                            A customization approach <span class="landing-handwritten">never seen before</span>.
                        </h2>
                        <p class="landing-section-subheading mt-5 text-slate-700 dark:text-slate-300">
                            <u class="font-semibold text-pink-600 dark:text-pink-300">Soft customization</u>
                            lets you override any class on any component, globally or per-instance, right from
                            your <code class="rounded bg-pink-500/10 px-1.5 py-0.5 text-pink-600 dark:text-pink-300">AppServiceProvider</code>.
                            No need to fork a template.
                        </p>

                        <ul class="mt-6 space-y-3 text-sm text-slate-700 dark:text-slate-300">
                            <li class="flex items-center gap-2"><x-icon name="check" class="h-4 w-4 text-pink-500" /> Append, prepend, replace or remove any class.</li>
                            <li class="flex items-center gap-2"><x-icon name="check" class="h-4 w-4 text-pink-500" /> Scoped variants. Just opt-in with <code class="text-pink-600 dark:text-pink-300">scope="shadowless"</code>.</li>
                            <li class="flex items-center gap-2"><x-icon name="check" class="h-4 w-4 text-pink-500" /> Chain across components with <code class="text-pink-600 dark:text-pink-300">->and()</code>.</li>
                        </ul>

                        <div class="mt-8 flex items-center gap-3">
                            <a href="{{ route('documentation', ['v3', 'customization', 'soft']) }}"
                               wire:navigate
                               class="landing-cta-primary">
                                Know more
                                <x-icon name="arrow-right" class="h-4 w-4" />
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="landing-ide">
                            <div class="landing-ide-titlebar">
                                <div class="landing-ide-dots">
                                    <span class="landing-ide-dot landing-ide-dot--red"></span>
                                    <span class="landing-ide-dot landing-ide-dot--yellow"></span>
                                    <span class="landing-ide-dot landing-ide-dot--green"></span>
                                </div>
                                <span class="landing-ide-title">euseiphp — AppServiceProvider.php</span>
                                <span class="w-12"></span>
                            </div>

                            <div class="landing-ide-tabs">
                                <span class="landing-ide-tab landing-ide-tab--active">
                                    <span class="landing-ide-tab-dot"></span>
                                    AppServiceProvider.php
                                </span>
                            </div>

                            @php
                                $lineCount = substr_count($customization, "\n") + 1;
                            @endphp
                            <div class="landing-ide-source-shell">
                                <div class="landing-ide-gutter" aria-hidden="true">
                                    @for ($line = 1; $line <= $lineCount; $line++)
                                        <span @class(['is-cursor' => $line === 9])>{{ $line }}</span>
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

            <section class="landing-section">
                <div class="landing-section-header landing-section-header--centered">
                    <span class="landing-eyebrow">By the numbers</span>
                    <h2 class="landing-section-heading">A library that earns its weight.</h2>
                </div>

                <div class="landing-stats">
                    @foreach ($stats as $stat)
                        <div class="landing-stat"
                             x-data
                             x-on:mousemove="
                                 const r = $el.getBoundingClientRect();
                                 $el.style.setProperty('--spot-x', ($event.clientX - r.left) + 'px');
                                 $el.style.setProperty('--spot-y', ($event.clientY - r.top) + 'px');
                             ">
                            <div class="landing-stat-value">{{ $stat['value'] }}</div>
                            <div class="landing-stat-label">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="landing-section">
                <div class="landing-section-header landing-section-header--centered">
                    <span class="landing-eyebrow">Sponsors</span>
                    <h2 class="landing-section-heading">Backed by the community.</h2>
                    <p class="landing-section-subheading">
                        TallStackUI is free, open source, and backed by sponsors who care about good open tooling.
                        Want your logo here? <a href="https://github.com/sponsors/devajmeireles" target="_blank" rel="noopener" class="font-semibold text-pink-600 underline decoration-pink-500/40 underline-offset-2 hover:decoration-pink-500 dark:text-pink-400">Sponsor us</a>.
                    </p>
                </div>

                <a href="https://www.jetbrains.com/phpstorm/" target="_blank" rel="noopener" class="landing-sponsor-link">
                    <x-svg.sponsors.jb class="landing-sponsor-logo h-28 w-28" />
                    <div class="landing-sponsor-name">JetBrains</div>
                    <p class="landing-sponsor-tagline">
                        PhpStorm keeps TallStackUI moving.
                    </p>
                    <div class="landing-sponsor-badges">
                        <x-badge icon="sparkles" color="pink" sm round>Diamond Sponsor</x-badge>
                    </div>
                </a>
            </section>

            <section class="landing-section">
                <div class="landing-cta-final">
                    <h2 class="landing-cta-final-headline">
                        Ship beautiful apps.
                    </h2>
                    <p class="landing-cta-final-sub">
                        Drop it in, customize it, ship. TallStackUI stays out of the way so you can build
                        what actually matters. <b class="text-white">Free, and it always will be</b>.
                        No Pro components. Everything's here for you to use.
                    </p>
                    <div class="landing-cta-final-actions">
                        <a href="{{ route('documentation', ['v3', 'installation']) }}"
                           wire:navigate
                           class="landing-cta-final-primary">
                            Get Started
                            <x-icon name="arrow-right" class="h-5 w-5" />
                        </a>
                    </div>
                </div>
            </section>

            <section class="landing-section pt-0">
                <div class="flex justify-center">
                    <p class="text-center text-sm font-normal text-slate-600 dark:text-slate-400">
                        TallStackUI is mostly designed, built, and maintained by
                        <a href="https://linkedin.com/in/devajmeireles" class="font-medium text-pink-600 underline dark:text-pink-400" target="_blank" rel="noopener">AJ Meireles</a>,
                        with help from a bunch of great developers.
                    </p>
                </div>
            </section>

            <footer class="border-t border-slate-200/70 pb-12 pt-8 dark:border-white/5 md:flex md:items-center md:justify-between">
                <div class="flex justify-center space-x-6 md:order-2">
                    <x-github />
                </div>
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-slate-500">
                        &copy; {{ now()->year }}, TallStackUI. All rights reserved.
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <x-back-to-top color="pink" />

    <script>
        var version = "v3";
        var algolia_app_id = '{{ config('services.algolia.id', false) }}';
        var algolia_search_key = '{{ config('services.algolia.secret', false) }}';
    </script>
    @livewireScripts
</body>
</html>
