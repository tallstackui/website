<?php

namespace App\Enums\Examples\V4\Form;

class Autocomplete
{
    public const string BASIC = <<<'HTML'
    <!-- "items" accepts a plain array or a collection instance -->

    <x-autocomplete :items="[
        ['value' => 'São Paulo'],
        ['value' => 'Rio de Janeiro'],
        ['value' => 'Belo Horizonte'],
        ['value' => 'Curitiba'],
        ['value' => 'Porto Alegre'],
    ]" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-autocomplete label="City"
                    hint="Start typing to filter the list"
                    placeholder="Choose a city"
                    :items="[
                        ['value' => 'São Paulo'],
                        ['value' => 'Rio de Janeiro'],
                        ['value' => 'Belo Horizonte'],
                    ]" />
    HTML;

    public const string DESCRIPTION = <<<'HTML'
    <x-autocomplete label="Assignee" :items="[
        ['value' => 'Taylor Otwell', 'description' => 'Creator of Laravel'],
        ['value' => 'Nuno Maduro',   'description' => 'Creator of PestPHP'],
        ['value' => 'Jess Archer',   'description' => 'Creator of Laravel Prompts'],
    ]" />
    HTML;

    public const string IMAGE = <<<'HTML'
    <x-autocomplete label="Assignee" :items="[
        [
            'value' => 'Taylor Otwell',
            'description' => 'Creator of Laravel',
            'image' => 'https://unavatar.io/github/taylorotwell',
        ],
        [
            'value' => 'Nuno Maduro',
            'description' => 'Creator of PestPHP',
            'image' => 'https://unavatar.io/github/nunomaduro',
        ],
        [
            'value' => 'Jess Archer',
            'description' => 'Creator of Laravel Prompts',
            'image' => 'https://unavatar.io/github/jessarcher',
        ],
    ]" />
    HTML;

    public const string DISABLED_ITEMS = <<<'HTML'
    <x-autocomplete label="Status" :items="[
        ['value' => 'Pending'],
        ['value' => 'Approved'],
        ['value' => 'Rejected', 'disabled' => true],
    ]" />
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-autocomplete label="City" clearable :items="[
        ['value' => 'São Paulo'],
        ['value' => 'Rio de Janeiro'],
        ['value' => 'Belo Horizonte'],
    ]" />
    HTML;

    public const string PREFIX_SUFFIX = <<<'HTML'
    <x-autocomplete label="IA"
                    prefix="www"
                    suffix=".com"
                    :items="[
                        ['value' => 'claude'],
                        ['value' => 'chatgpt'],
                        ['value' => 'gemini.google'],
                    ]" />
    HTML;

    public const string LAZY = <<<'HTML'
    <x-autocomplete label="City" lazy="2" :items="[
        ['value' => 'São Paulo'],
        ['value' => 'Rio de Janeiro'],
        ['value' => 'Belo Horizonte'],
        ['value' => 'Curitiba'],
        ['value' => 'Porto Alegre'],
        ['value' => 'Salvador'],
        ['value' => 'Recife'],
        ['value' => 'Fortaleza'],
    ]" />
    HTML;

    public const string STRICT = <<<'HTML'
    <x-autocomplete label="Status" strict :items="[
        ['value' => 'Pending'],
        ['value' => 'Approved'],
        ['value' => 'Rejected'],
    ]" />
    HTML;

    public const string STRICT_GLOBAL = <<<'HTML'
    // config/tallstackui.php

    'autocomplete' => [
        Components\Form\Autocomplete\Component::class,
        [
            /*
            |----------------------------------------------------------------------
            | Autocomplete Global Settings
            |----------------------------------------------------------------------
            | strict: when true, all autocomplete components will, by default, only
            | accept values that exist in their items list. The wire:model is only
            | updated when a row is picked from the dropdown, and the input reverts
            | to the last selected value on blur with an unmatched query.
            */
            'strict' => false, // [tl! highlight]
        ],
    ],
    HTML;

    public const string REQUEST_STRING = <<<'HTML'
    <!-- Using a route as a string -->
    <x-autocomplete label="User" request="/api/users" />

    <!-- Using a Laravel route -->
    <x-autocomplete label="User" :request="route('api.users')" />
    HTML;

    public const string REQUEST_ARRAY = <<<'HTML'
    <x-autocomplete label="User" :request="[
        'url' => route('api.users'),
        'method' => 'post',
        'params' => ['team_id' => 7],
    ]" />
    HTML;

    public const string REQUEST_RESPONSE_SHAPE = <<<'HTML'
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::get('/users', function (Request $request) {
        $search = $request->get('search');

        return User::query()
            ->when($search, fn ($query) => $query->where('name', 'like', "%{$search}%"))
            ->limit(10)
            ->get()
            ->map(fn (User $user): array => [
                'value' => $user->name,
                'description' => $user->email,
                'image' => $user->avatar,
            ]);
    })->name('api.users');
    HTML;

    public const string REQUEST_LAZY = <<<'HTML'
    <x-autocomplete label="User" request="/api/users" lazy="2" clearable />
    HTML;

    public const string DISABLED = <<<'HTML'
    <x-autocomplete label="City" disabled :items="[
        ['value' => 'São Paulo'],
        ['value' => 'Rio de Janeiro'],
    ]" />
    HTML;

    public const string PLACEHOLDERS = <<<'HTML'
    <x-autocomplete label="User"
                    request="/api/users"
                    :placeholders="[
                        'default' => 'Type a user name...',
                        'empty'   => 'No user matches your search.',
                        'loading' => 'Searching users...',
                    ]" />
    HTML;

    public const string SLOT_AFTER = <<<'HTML'
    <x-autocomplete label="City" :items="[
        ['value' => 'São Paulo'],
        ['value' => 'Rio de Janeiro'],
    ]">
        <x-slot:after>
            <div class="my-2 flex items-center justify-center px-2">
                <x-button xs x-on:click="$tsui.interaction('dialog').success('Done!', `Term: ${search}`).send()">
                    <span x-html="`Create city <b>${search}</b>`"></span>
                </x-button>
            </div>
        </x-slot:after>
    </x-autocomplete>
    HTML;

    public const string EVENTS = <<<'HTML'
    <!-- $event.detail.item: the picked row, including any extra keys you put on it. -->

    <x-autocomplete label="User" :items="[
        ['value' => 'Alice', 'description' => 'admin'],
        ['value' => 'Bob',   'description' => 'editor'],
    ]"
        x-on:select="alert(`Selected: ${$event.detail.item.value}`)"
        x-on:clear="alert('Cleared')"
        x-on:open="console.log('opened')"
        x-on:close="console.log('closed')" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('autocomplete')
        ->block('box.list.item.wrapper', 'your-tailwind-classes');
    HTML;
}
