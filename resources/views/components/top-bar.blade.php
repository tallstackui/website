@if ($version === 'v2')
<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']" :text="[
            'V2 is now our main version. V1 is considered EoL!',
            'Starting from v2.3.0, TallStackUI support both TailwindCSS versions: v3 and v4!',
            'Do you like the TallStackUI? Consider sponsor the project!',
            'There are still dozens of new things to be done in 2025 in TallStackUI v2. Stay tuned for every release!',
        ]" />
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
