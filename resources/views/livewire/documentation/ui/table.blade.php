<?php

declare(strict_types=1);

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

new class extends Component
{
    use WithPagination;

    public int $mode = 1;

    public ?string $paginator = null;

    public ?int $quantity = 2;

    public ?string $search = null;

    public array $selected = [1, 2, 3, 4, 5];

    public array $sort = [
        'column'    => 'id',
        'direction' => 'desc',
    ];

    public function boot(): void
    {
        $this->quantity = in_array($this->mode, [4, 5, 7, 8, 14, 15, 16]) ? 2 : 11;
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
        $rows = $this->mode === 13
            ? collect()
            : User::query()
                ->when($this->search, fn (Builder $query) => $query->where('name', 'like', "%{$this->search}%"))
                ->when($this->mode === 6, fn (Builder $query) => $query->orderBy(...array_values($this->sort)))
                ->paginate($this->quantity)
                ->withQueryString();

        if ($this->mode === 11) {
            $rows->through(fn (User $user) => $user->setAttribute('highlight', match ($user->id) {
                1, 5    => 'green',
                3, 8    => 'red',
                2       => 'yellow',
                default => null,
            }));
        }

        return [
            'headers' => [
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Member Name', 'sortable' => false],
            ],
            'rows' => $rows,
        ];
    }
};

?>

<div>
    @if ($mode === 1)
        <x-table :$headers :$rows />
    @elseif ($mode === 2)
        <x-table :$headers :$rows headerless />
    @elseif ($mode === 3)
        <x-table :$headers :$rows striped />
    @elseif ($mode === 4)
        <x-table :$headers :$rows filter :quantity="[2, 5, 10]" />
    @elseif ($mode === 5)
        <x-table :$headers :$rows filter :quantity="[2, 5, 10]" loading />
    @elseif ($mode === 6)
        <x-table :$headers :$rows :$sort />
    @elseif ($mode === 7)
        <x-table :$headers :$rows paginate persistent />
    @elseif ($mode === 8)
        <x-table :$headers :$rows paginate header="Header Slot" footer="Footer Slot" />
    @elseif ($mode === 9)
        <x-table :$headers :$rows :$sort selectable wire:model="selected" />
    @elseif ($mode === 10)
        <x-table :$headers :$rows link="https://google.com.br/?users={id}" blank />
    @elseif ($mode === 11)
        <x-table :$headers :$rows highlight />
    @elseif ($mode === 12)
        <x-table :$headers :$rows expandable>
            @interact('sub_table', $row)
                <x-table
                    :headers="[
                    ['index' => 'property', 'label' => 'Property'],
                    ['index' => 'value', 'label' => 'Value'],
                ]"
                    :rows="[
                    ['property' => 'Email', 'value' => $row->email],
                    ['property' => 'Created', 'value' => $row->created_at->format('Y-m-d')],
                ]"
                />
            @endinteract
        </x-table>
    @elseif ($mode === 13)
        <x-table :$headers :$rows empty="No records found." />
    @elseif ($mode === 14)
        <x-table :$headers :$rows paginate :$paginator />
    @elseif ($mode === 15)
        <x-table :$headers :$rows simple-pagination :$paginator />
    @elseif ($mode === 16)
        <x-table :$headers :$rows paginate persistent="users-table" />
    @elseif ($mode === 17)
        <div x-data="{ rows: [] }" x-on:selected="rows = $event.detail.rows">
            <x-table :$headers :$rows selectable wire:model="selected" />
            <p class="dark:text-dark-400 mt-2 text-sm text-gray-500">
                Selected: <b x-text="rows.join(', ') || 'none'"></b>
            </p>
        </div>
    @endif
</div>
