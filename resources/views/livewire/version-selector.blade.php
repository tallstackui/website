<?php

use function Livewire\Volt\{state};

$version = state('version', '1.X');

?>

<div>
    <p class="text-xs text-pink-900 font-medium">Version</p>
    <x-select.styled wire:model="version" :options="['1.X']" disabled />
</div>
