@if ($version === 'v3')
    <x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']" rotate="slow">
        <p><b>v3.5.0 is out!</b> Dozens of significant improvements overall! Keep your TallStackUI up to date to get the best experience.</p>
    </x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
