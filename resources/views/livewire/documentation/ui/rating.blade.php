<?php

use function Livewire\Volt\{state};

state(['model' => 1, 'rate' => 3]);

$evaluate = function () {
    //
};

?>

<div>
    @if ($model === 1)
        <x-rating :rate="3" />
    @elseif ($model === 2)
        <x-rating :rate="1" :quantity="3" />
    @elseif ($model === 3)
        <x-rating :rate="3" text="TALL" position="right" />
        <x-rating :rate="3" text="LIVT" />
    @elseif ($model === 4)
        <x-rating :rate="3" xs />
        <x-rating :rate="3" sm />
        <x-rating :rate="3" md />
        <x-rating :rate="3" lg />
    @elseif ($model === 5)
        <x-rating :rate="3" />
        <x-rating :rate="3" color="secondary" />
        <x-rating :rate="3" color="slate" />
        <x-rating :rate="3" color="gray" />
        <x-rating :rate="3" color="zinc" />
        <x-rating :rate="3" color="neutral" />
        <x-rating :rate="3" color="stone" />
        <x-rating :rate="3" color="red" />
        <x-rating :rate="3" color="orange" />
        <x-rating :rate="3" color="amber" />
        <x-rating :rate="3" color="yellow" />
        <x-rating :rate="3" color="lime" />
        <x-rating :rate="3" color="green" />
        <x-rating :rate="3" color="emerald" />
        <x-rating :rate="3" color="teal" />
        <x-rating :rate="3" color="cyan" />
        <x-rating :rate="3" color="sky" />
        <x-rating :rate="3" color="blue" />
        <x-rating :rate="3" color="indigo" />
        <x-rating :rate="3" color="violet" />
        <x-rating :rate="3" color="purple" />
        <x-rating :rate="3" color="fuchsia" />
        <x-rating :rate="3" color="pink" />
        <x-rating :rate="3" color="rose" />
        <x-rating :rate="3" color="black" />
        <x-rating :rate="3" color="white" />
    @elseif ($model === 6)
        <x-rating :rate="3" x-on:evaluate="alert(`Evaluated: ${JSON.stringify($event.detail.evaluate)}`)" />
    @endif
</div>
