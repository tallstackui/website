@if ($version === latest_version())
    <x-banner
        :color="['background' => 'bg-dark-900 border-b border-white/10', 'text' => 'text-white']"
    >
        <p>
            <b>TallStackUI 4.0 is here!</b>
            Seven new components and thousand of improvements.
            <a
                href="/"
                class="font-semibold underline decoration-pink-500 underline-offset-2"
            >
                See what's new
            </a>
            .
        </p>
    </x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b>
        You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
