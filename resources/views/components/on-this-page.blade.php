@if (!empty($contents))
    <div @class([
            'xl:top-[4.75rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.75rem)] xl:flex-none xl:overflow-hidden xl:py-16 xl:pr-6',
            'hidden xl:sticky' => !$mobile,
            'pb-8' => $mobile,
        ])>
        <nav aria-labelledby="on-this-page-title" class="w-56">
            <h2 id="on-this-page-title" class="text-sm font-medium text-slate-900 font-display dark:text-white">ON THIS PAGE</h2>
            <ol role="list" class="mt-4 text-sm space-y-3">
                {{-- If the index is numeric, we assume it's a flat array. --}}
                @if (!is_numeric(array_keys($contents)[0]))
                    @foreach ($contents as $parent => $children)
                    <li>
                        <h3><a class="font-semibold text-pink-500">{{ $parent }}</a></h3>
                        <ol role="list" class="mt-2 pl-5 text-gray-500 space-y-3 dark:text-gray-400">
                            @foreach ($children as $child)
                                <li><a class="hover:text-pink-600 dark:hover:text-gray-300" href="#{{ ($child['prefix'] ?? '') . $child['anchor'] }}">{{ $child['title'] }}</a></li>
                            @endforeach
                        </ol>
                    </li>
                    @endforeach
                {{-- Otherwise, we assume it's a nested array (parent => child). --}}
                @else
                    @foreach ($contents as $content)
                        <li>
                            <h3 class="text-gray-500 transition hover:text-pink-600 dark:text-gray-400 dark:hover:text-gray-300">
                                <a href="#{{ $content['anchor'] }}">{{ $content['title'] }}</a>
                            </h3>
                        </li>
                    @endforeach
                @endif
            </ol>
        </nav>
        <div class="mt-4 hidden space-y-2 md:flex md:flex-col">
            <div class="flex items-center justify-center rounded-full border border-pink-600 bg-pink-700 text-sm font-medium text-pink-50 p">
                <x-link href="https://github.com/sponsors/devajmeireles" icon="arrow-up-right" position="right" blank color="white">
                    Sponsor the TallStackUI
                </x-link>
            </div>
            <div class="flex items-center justify-center rounded-full border border-purple-600 bg-purple-700 text-sm font-medium text-purple-50 p">
                <x-link href="{{ $discord }}" icon="arrow-up-right" position="right" blank color="white">
                    Join TallStackUI on Discord
                </x-link>
            </div>
        </div>
    </div>
@endif
