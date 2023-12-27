<?php

namespace App\Enums\Examples\Ui;

class Table
{
    public const EXAMPLE_ARRAY = <<<'HTML'
    @php
        $headers = [
            ['index' => 'id', 'label' => '#'],
            ['index' => 'name', 'label' => 'Member'],
        ];

        $rows = [
            ['id' => 1, 'name' => 'Taylor Otwell'],
            ['id' => 2, 'name' => 'Nuno Maduro'],
        ];
    @endphp

    <x-table :$headers :$rows />
    HTML;

    public const EXAMPLE_ELOQUENT = <<<'HTML'
    <?php

    // Example of Livewire through Laravel Volt.

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

        public int $quantity = 10; // [tl! highlight]

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

        <!-- You can control the quantities of the quantity selector -->
        <x-table :$headers :$rows filter :quantity="[2,5,10]" />

        <!-- You can specify different properties for the filter -->
        <x-table :$headers :$rows filter :filters="['quantity' => 'foo', 'search' => 'bar']" />
    </div>
    HTML;

    public const LOADING = <<<'HTML'
    <?php

    use App\Models\User;
    use Livewire\Volt\Component;
    use Illuminate\Database\Eloquent\Builder;

    new class extends Component {

        public int $quantity = 10;

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

    use Livewire\Volt\Component;
    use App\Models\User;

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
                    ['index' => 'name', 'label' => 'Member'],
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

    use Livewire\Volt\Component;
    use App\Models\User;

    new class extends Component {

        public function with(): array
        {
            return [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
                'rows' => User::query()
                    ->paginate(10)
                    ->withQueryString()
            ];
        }
    }; ?>

    <div>
        <x-table :$headers :$rows paginate />
    </div>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->table()
        ->block('block', 'classes');
    HTML;
}
