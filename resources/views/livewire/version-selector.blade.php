<?php

use function Livewire\Volt\{state, uses};
use App\Traits\VersionDiscovery;
use Illuminate\Support\Facades\Cookie;

uses(VersionDiscovery::class);

state(['version' => fn() => $this->current()]);

$change = function (): void {
    if ($this->version === 'v2') {
        redirect()->away(route('documentation', ['v2', 'installation']));
    } else {
        redirect()->away(route('documentation', ['v1', 'getting-started']));
    }

    Cookie::queue(Cookie::forever('version', $this->version));
};
?>

<div>
    <x-select.native :options="[
        ['label' => 'Version 2.x', 'value' => 'v2'],
        ['label' => 'Version 1.x', 'value' => 'v1'],
    ]" wire:model="version" wire:change="change"/>
</div>
