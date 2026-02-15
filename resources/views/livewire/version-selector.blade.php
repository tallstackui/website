<?php

use Livewire\Component;
use App\Traits\VersionDiscovery;

return new class extends Component {
    use VersionDiscovery;

    public string $version;

    public function mount(): void
    {
        $this->version = $this->current();
    }

    public function change(): void
    {
        match ($this->version) {
            'v3' => redirect(route('documentation', ['v3', 'installation'])),
            'v2' => redirect(route('documentation', ['v2', 'installation'])),
            'v1' => redirect(route('documentation', ['v1', 'installation'])),
        };
    }
};
?>

<div>
    <x-select.native :options="[
        ['label' => 'Version 3.x', 'value' => 'v3'],
        ['label' => 'Version 2.x', 'value' => 'v2'],
        ['label' => 'Version 1.x', 'value' => 'v1'],
    ]" wire:model="version" wire:change="change"/>
</div>
