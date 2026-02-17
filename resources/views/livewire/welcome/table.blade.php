<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
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
                ['index' => 'action', 'label' => 'Send Notification', 'sortable' => false],
            ],
            'rows' => User::query()
                ->when($this->search, fn (Builder $query) => $query->where('name', 'like', "%{$this->search}%"))
                ->orderBy(...array_values($this->sort))
                ->paginate($this->quantity)
                ->withQueryString()
        ];
    }

    public function notify(string $user): void
    {
        $this->toast()
            ->success("Done!", "{$user} will be notified! ✅")
            ->send();
    }
};

?>

<div>
    <x-table :$headers
             :$rows
             :$sort
             filter
             paginate
             loading
             :quantity="[2,5,7]"
             id="users">
        @interact('column_name', $user)
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/images/avatar/'.random_int(1, 20).'.jpg') }}" alt="{{ $user->name }}" class="w-8 h-8 rounded-full"/>
                {{ $user->name }}
            </div>
        @endinteract
        @interact('column_action', $user)
        <x-button.circle color="blue"
                         icon="paper-airplane"
                         wire:click="notify('{{ $user->name }}')"/>
        @endinteract
    </x-table>
</div>
