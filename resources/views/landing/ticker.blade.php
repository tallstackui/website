@php
    $ticker = landing_ticker_components();
    $half = (int) ceil($ticker->count() / 2);
    $tickerTop = $ticker->take($half);
    $tickerBottom = $ticker->skip($half);
@endphp

<section class="landing-section" aria-label="Component index">
    <p
        class="dark:text-dark-500 mb-6 text-center font-mono text-[0.65rem] font-medium tracking-[0.18em] text-gray-400 uppercase"
    >
        The whole catalog, one install
    </p>

    <div class="landing-ticker">
        <div class="landing-ticker-track landing-ticker-track--left">
            @foreach ([false, true] as $clone)
                @foreach ($tickerTop as $component)
                    <a
                        href="{{ route("documentation", [$component["main"], $component["children"]]) }}"
                        wire:navigate
                        @if ($clone) aria-hidden="true" tabindex="-1" @endif
                        class="landing-ticker-item"
                    >
                        {{ $component["name"] }}
                    </a>
                @endforeach
            @endforeach
        </div>
    </div>

    <div class="landing-ticker mt-1">
        <div class="landing-ticker-track landing-ticker-track--right">
            @foreach ([false, true] as $clone)
                @foreach ($tickerBottom as $component)
                    <a
                        href="{{ route("documentation", [$component["main"], $component["children"]]) }}"
                        wire:navigate
                        @if ($clone) aria-hidden="true" tabindex="-1" @endif
                        class="landing-ticker-item"
                    >
                        {{ $component["name"] }}
                    </a>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
