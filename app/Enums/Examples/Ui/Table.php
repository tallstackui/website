<?php

namespace App\Enums\Examples\Ui;

class Table
{
    public const EXAMPLE_ARRAY = <<<'HTML'
    @php
        $headers = [
            ['index' => 'id', 'label' => '#'],
            ['index' => 'name', 'label' => 'Member'],
            // ...
        ];

        $rows = [
            ['id' => 1, 'name' => 'Taylor Otwell'],
            ['id' => 2, 'name' => 'Nuno Maduro'],
            // ...
        ];
    @endphp

    <x-table :$headers :$rows />
    HTML;

    public const EXAMPLE_ELOQUENT = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::all(),
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows />
    </div>
    HTML;

    public const BASIC = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::all(),
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows />
    </div>
    HTML;

    public const WITHOUT_HEADER = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::all(),
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows headerless />
    </div>
    HTML;

    public const STRIPED = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::all(),
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows striped />
    </div>
    HTML;

    public const FILTERS = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;
    use Illuminate\Database\Eloquent\Builder;

    new class extends Component {

        public ?int $quantity = 2; // [tl! highlight]

        public ?string $search = null; // [tl! highlight]

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::query()
                    ->when($this->search, function (Builder $query) { // [tl! highlight:3]
                        return $query->where('name', 'like', "%{$this->search}%");
                    })
                    ->paginate($this->quantity)
                    ->withQueryString()
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows filter />

        <!-- You can control the items of the quantity selector -->
        <x-table :$headers
                 :$rows
                 filter
                 :quantity="[2,5,10]" />

        <!-- You can specify different properties for the filter -->
        <x-table :$headers
                 :$rows
                 filter
                 :quantity="[2,5,10]"
                 :filters="['quantity' => 'foo', 'search' => 'bar']" />
    </div>
    HTML;

    public const LOADING = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;
    use Illuminate\Database\Eloquent\Builder;

    new class extends Component {

        public ?int $quantity = 10;

        public ?string $search = null;

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::query()
                    ->when($this->search, function (Builder $query) {
                        return $query->where('name', 'like', "%{$this->search}%");
                    })
                    ->paginate($this->quantity)
                    ->withQueryString()
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows filter loading />
    </div>
    HTML;

    public const SORT = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public array $sort = [ // [tl! highlight:3]
            'column' => 'id',
            'direction' => 'desc',
        ];

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    // You can disable the sorting for specific columns
                    ['index' => 'name', 'label' => 'Member', 'sortable' => false], // [tl! highlight]
                ],
                'rows' => User::query()
                    ->orderBy(...array_values($this->sort)) // [tl! highlight]
                    ->paginate(10)
                    ->withQueryString()
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows :$sort />
    </div>
    HTML;

    public const PAGINATE = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::query()
                    ->paginate(2)
                    ->withQueryString()
            ];
        }
    }; ?>

    <div>
        <!--
        The `id` parameter must be set in order to use the pagination. You need
        to set a different id for each table when you have multiples tables in
        the same page.
        -->
        <x-table :$headers :$rows paginate id="users" />

        <!-- You can use the paginator with mobile style even when in desktop -->
        <x-table :$headers :$rows paginate id="users" simple-pagination />

        <!--
        You can disable the TallStackUI paginator element. When you do that
        the table component will use the Livewire paginator element.
        -->
        <x-table :$headers :$rows paginate :paginator="null" id="users" />
    </div>
    HTML;

    public const COLUMNS = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;
    use Illuminate\Database\Eloquent\Builder;

    new class extends Component {

        public ?int $quantity = 10;

        public ?string $search = null;

        public function delete(string $id): void
        {
            dd($id);
        }

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                    ['index' => 'action'], // [tl! highlight]
                ],
                'rows' => User::query()
                    ->when($this->search, function (Builder $query) {
                        return $query->where('name', 'like', "%{$this->search}%");
                    })
                    ->paginate($this->quantity)
                    ->withQueryString(),
                'type' => 'data', // [tl! highlight]
            ];
        }
    }; ?>

    <div>
        <!-- 1: -->
        <x-table :$headers :$rows filter paginate id="users">
            <!-- The $row represents the instance of \App\Model\User of each row -->
            @interact('column_action', $row) <!-- [tl! highlight] -->
                <x-button.circle color="red"
                                 icon="trash"
                                 wire:click="delete('{{ $row->id }}')" />
            @endinteract
        </x-table>

        <!-- 2: You can pass extra variables to the directive -->
        <x-table :$headers :$rows filter paginate id="users">
            @interact('column_action', $row, $type) <!-- [tl! highlight] -->
                <x-button.circle color="red"
                                 icon="trash"
                                 wire:click="delete('{{ $row->id }}', '{{ $type }}')" />
            @endinteract
        </x-table>
    </div>
    HTML;

    public const LOOP = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;
    use Illuminate\Database\Eloquent\Builder;

    new class extends Component {

        public ?int $quantity = 10;

        public ?string $search = null;

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                    ['index' => 'action'],
                ],
                'rows' => User::query()
                    ->when($this->search, function (Builder $query) {
                        return $query->where('name', 'like', "%{$this->search}%");
                    })
                    ->paginate($this->quantity)
                    ->withQueryString(),
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows filter paginate id="users">
            @interact('column_action', $row)
                <livewire:delete.user :user="$row" :key="uniqid()" /> <!-- [tl! highlight] -->
            @endinteract
        </x-table>
    </div>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->table()
        ->block('block', 'classes');
    HTML;
}
