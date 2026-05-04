@if ($version === 'v3')
    <x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']">
        <p>v3.4.0 is out!<b>Two new components added: List and Button Group.</b></p>
    </x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
