<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use WithPagination;
    use Interactions;

    public ?int $quantity = 5;

    public ?string $search = null;

    public array $sort = [
        'column' => 'id',
        'direction' => 'asc',
    ];

    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Member'],
                ['index' => 'action', 'label' => 'Remove of Laravel Team', 'sortable' => false],
            ],
            'rows' => User::query()
                ->when($this->search, fn(Builder $query) => $query->where('name', 'like', "%{$this->search}%"))
                ->orderBy(...array_values($this->sort))
                ->paginate($this->quantity)
                ->withQueryString()
        ];
    }

    public function notify(string $user): void
    {
        $user = explode(' ', $user)[0];

        $this->toast()
            ->error("Naaah!", "{$user} can't leave Laravel team! 😝")
            ->send();
    }
}; ?>

<div>
    <x-table :$headers
             :$rows
             :$sort
             filter
             paginate
             :quantity="[2,5,7]"
             id="users">
        @interact('column_action', $user)
        <x-button.circle color="red"
                         icon="trash"
                         wire:click="notify('{{ $user->name }}')"/>
        @endinteract
    </x-table>
</div>
