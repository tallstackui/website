@if ($version === 'v3')
    <x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']">
        <p>Say hello to the v3.2.0! <b>Three new components added: Accordion, Calendar and Timeline.</b></p>
    </x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
