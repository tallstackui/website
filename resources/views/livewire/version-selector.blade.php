<?php

declare(strict_types=1);

use Livewire\Component;
use Livewire\Attributes\Computed;

return new class extends Component {
    public string $version;

    public function mount(): void
    {
        $this->version = config("documentation.version");
    }

    #[Computed]
    public function options(): array
    {
        return collect(config("documentation.sites"))
            ->map(
                fn (string $url, string $version): array => [
                    "label" => "Version " . str($version)->after("v") . ".x",
                    "value" => $version,
                ],
            )
            ->values()
            ->all();
    }

    public function change(): void
    {
        if ($this->version === config("documentation.version")) {
            return;
        }

        redirect()->away(version_url($this->version, "installation"));
    }
};
?>

<div>
    <x-select.native
        :options="$this->options"
        wire:model="version"
        wire:change="change"
    />
</div>
