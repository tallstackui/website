<?php

use App\Traits\VersionDiscovery;
use Livewire\Attributes\Computed;
use Livewire\Component;

return new class extends Component {
    use VersionDiscovery;

    public string $version;

    public function mount(): void
    {
        $this->version = $this->current();
    }

    #[Computed]
    public function options(): array
    {
        return collect(config('documentation.sites'))
            ->map(fn (string $url, string $version): array => [
                'label' => 'Version '.str($version)->after('v').'.x',
                'value' => $version,
            ])
            ->values()
            ->all();
    }

    public function change(): void
    {
        if ($this->version === $this->current()) {
            return;
        }

        redirect()->away(version_url($this->version, 'installation'));
    }
};
?>

<div>
    <x-select.native :options="$this->options" wire:model="version" wire:change="change" />
</div>
