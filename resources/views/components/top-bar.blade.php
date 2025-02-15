@if ($version === 'v2')
<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']">
    <a href="{{ route('documentation', ['v2', 'upgrade-guide']) }}" class="underline"><i>V2</i> stable is here!</a> 🥳🎉 Upgrade now!
</x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
