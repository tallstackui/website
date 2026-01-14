@if ($version === 'v2')
<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']" text="TallStackUI v2 is fully compatible with Livewire v4. We are now focused on TallStackUI v3, which will bring many new features!'" />
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
