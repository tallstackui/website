@if ($version === 'v3')
    <x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']">
        <a href="{{ route('documentation', ['v3', 'upgrade-guide']) }}">🎉 Welcome to the new major version: v3. <b>Upgrade now!</b></a>
    </x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
