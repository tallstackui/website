<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Actions\RetrieveReleases;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

new class extends Component {
    use WithPagination;

    public bool $breaking = false;

    public function with(): array
    {
        $releases = RetrieveReleases::execute();

        $releases = $releases->filter(fn (array $release) => $release['draft'] === false && $release['prerelease'] === false)
            ->when($this->breaking, fn (Collection $releases) => $releases->filter(fn($release) => str_contains($release['body'], 'Breaking Change')))
            ->map(function (array $release) {
                return [
                    'version' => $release['name'],
                    'body' => $release['body'],
                    'url' => $release['html_url'],
                    'date' => Carbon::parse($release['created_at'])->format('m/d/Y'),
                ];
            });

        return [
            'headers' => [
                ['index' => 'version', 'label' => 'Version'],
                ['index' => 'date', 'label' => 'Date Released'],
                ['index' => 'action']
            ],
            'rows' => new LengthAwarePaginator($releases->forPage($this->getPage(), 10), $releases->count(), 10, $this->getPage())
        ];
    }
} ?>

<div>
    <div class="flex justify-end mb-4">
        <x-toggle wire:model.live="breaking" color="pink" label="Filter for Breaking Changes"/>
    </div>
    <x-table :$headers :$rows paginate simple-pagination>
        @interact('column_action', $row)
        <div class="flex items-center space-x-2">
            <x-button.circle href="{{ $row['url'] }}" target="_blank" icon="arrow-up-right" color="pink"/>
            @if (str_contains($row['body'], 'Breaking Change'))
                <x-badge color="red">Breaking Changes</x-badge>
            @endif
        </div>
        @endinteract
    </x-table>
</div>
