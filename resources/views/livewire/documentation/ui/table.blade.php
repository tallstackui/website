<?php

use Illuminate\Database\Eloquent\Builder;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\User;

new class extends Component {
    use WithPagination;

    public int $mode = 1;

    public ?int $quantity = 2;

    public ?string $search = null;

    public array $sort = [
        'column' => 'id',
        'direction' => 'desc',
    ];

    public function boot(): void
    {
        $this->quantity = in_array($this->mode, [4, 5, 7]) ? 2 : 10;
    }

    public function updatingQuantity(): void
    {
        sleep(1);
    }

    public function updatingSearch(): void
    {
        sleep(1);
    }

    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Member Name'],
            ],
            'rows' => User::query()
                ->when($this->search, fn (Builder $query) => $query->where('name', 'like', "%{$this->search}%"))
                ->when($this->mode === 6, fn (Builder $query) => $query->orderBy(...array_values($this->sort)))
                ->paginate($this->quantity)
                ->withQueryString()
        ];
    }
} ?>

<div>
    @if ($mode === 1)
        <x-table :$headers :$rows/>
    @elseif($mode === 2)
        <x-table :$headers :$rows headerless/>
    @elseif ($mode === 3)
        <x-table :$headers :$rows striped/>
    @elseif ($mode === 4)
        <x-table :$headers :$rows filter :quantity="[2,5,10]"/>
    @elseif ($mode === 5)
        <x-table :$headers :$rows filter :quantity="[2,5,10]" loading/>
    @elseif ($mode === 6)
        <x-table :$headers :$rows :$sort/>
    @elseif ($mode === 7)
        <x-table :$headers :$rows paginate/>
    @endif
</div>
