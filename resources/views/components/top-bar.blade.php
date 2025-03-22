@if ($version === 'v2')
<x-banner :color="[
                'background' => 'bg-pink-900',
                'text' => 'text-white'
          ]" :text="[
            'V2 is now our main version. V1 is considered EoL!',
            'V2 now support both TailwindCSS versions, v3 and v4!',
            'Please, consider sponsor TallStackUI project to keep it alive!',
        ]" />
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
