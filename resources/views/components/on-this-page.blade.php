@props(['content' => [], 'mobile' => false])

@php
    $slug = fn ($item) => str($item)->lower()->slug()->value();
@endphp

@if (! empty($content))
    <div @class([
        'xl:top-14 xl:-mr-6 xl:block xl:h-[calc(100vh-3.5rem)] xl:flex-none custom-scrollbar overflow-y-auto xl:py-16 xl:pr-6',
        'hidden xl:sticky' => ! $mobile,
        'pb-8'             => $mobile,
    ])>
        <nav aria-labelledby="on-this-page-title" class="w-56">
            <h2
                id="on-this-page-title"
                class="dark:text-dark-500 font-mono text-[0.65rem] font-semibold tracking-[0.16em] text-gray-400 uppercase"
            >
                On this page
            </h2>
            <ol role="list" class="dark:border-dark-700 mt-4 space-y-2.5 border-l border-gray-200 pl-4 text-sm">
                {{-- If the index is numeric, we assume it's a flat array. --}}
                @if (! is_numeric(array_keys($content)[0]))
                    @foreach ($content as $parent => $children)
                        <li>
                            <h3 class="dark:text-dark-100 text-[0.82rem] font-medium text-gray-900">{{ $parent }}</h3>
                            <ol role="list" class="mt-2 space-y-2.5 pl-3">
                                @foreach ($children['contents'] as $child)
                                    <li>
                                        <a
                                            class="dark:text-dark-400 text-[0.82rem] text-gray-500 transition hover:text-pink-600 dark:hover:text-pink-400"
                                            href="#{{ $slug($parent).'-'.$slug($child) }}"
                                        >{{ $child }}</a>
                                    </li>
                                @endforeach
                            </ol>
                        </li>
                    @endforeach
                    {{-- Otherwise, we assume it's a nested array (parent => child). --}}
                @else
                    @foreach ($content as $text)
                        <li>
                            <h3 class="dark:text-dark-400 text-[0.82rem] text-gray-500 transition hover:text-pink-600 dark:hover:text-pink-400">
                                <a href="#{{ $slug($text) }}">{{ $text }}</a>
                            </h3>
                        </li>
                    @endforeach
                @endif
            </ol>
        </nav>
        <div class="mt-6 hidden space-y-2 md:flex md:flex-col">
            <a
                href="https://github.com/sponsors/devajmeireles"
                target="_blank"
                rel="noopener"
                class="group dark:border-dark-700 dark:text-dark-300 flex w-56 items-center justify-between rounded-lg border border-gray-200 px-3 py-2 text-[0.8rem] text-gray-600 transition hover:border-pink-500/40 hover:text-pink-600 dark:hover:border-pink-500/40 dark:hover:text-pink-400"
            >
                Sponsor TallStackUI
                <x-icon
                    name="arrow-up-right"
                    class="dark:text-dark-500 h-3.5 w-3.5 text-gray-400 transition group-hover:text-pink-500"
                />
            </a>
            <a
                href="{{ $discord }}"
                target="_blank"
                rel="noopener"
                class="group dark:border-dark-700 dark:text-dark-300 flex w-56 items-center justify-between rounded-lg border border-gray-200 px-3 py-2 text-[0.8rem] text-gray-600 transition hover:border-violet-500/40 hover:text-violet-600 dark:hover:border-violet-500/40 dark:hover:text-violet-400"
            >
                Join the Discord
                <x-icon
                    name="arrow-up-right"
                    class="dark:text-dark-500 h-3.5 w-3.5 text-gray-400 transition group-hover:text-violet-500"
                />
            </a>
            <a
                x-on:click="$tsui.open.modal('aj')"
                rel="noopener"
                class="group dark:border-dark-700 relative hidden w-56 cursor-pointer rounded-lg border border-gray-200 p-3 transition hover:border-pink-500/40 xl:block"
            >
                <div class="flex items-start gap-2.5">
                    <img
                        src="https://unavatar.io/github/devajmeireles"
                        alt="AJ Meireles"
                        loading="lazy"
                        class="h-10 w-10 flex-none rounded-full object-cover ring-2 ring-pink-500/20"
                    />
                    <div class="min-w-0 pr-5">
                        <p class="dark:text-dark-100 text-sm font-semibold text-gray-900">Hire AJ!</p>
                        <p class="dark:text-dark-400 mt-0.5 text-xs leading-snug text-gray-500">
                            TallStackUI's creator, bring deep TALL Stack expertise straight to your team.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endif
