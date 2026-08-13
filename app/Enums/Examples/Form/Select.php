<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Select
{
    /* Native */

    public const string NATIVE_BASIC = <<<'HTML'
    <x-select.native :options="[1,2,3]" />
    HTML;

    public const string NATIVE_LABEL_HINT = <<<'HTML'
    <x-select.native label="Select One Option" hint="You can choose 1, 2 or 3" :options="[1,2,3]" />
    HTML;

    public const string NATIVE_READONLY_DISABLED = <<<'HTML'
    <x-select.native label="Readonly" :options="[1, 2, 3]" value="2" readonly />
    <x-select.native label="Disabled" :options="[1, 2, 3]" value="2" disabled />
    HTML;

    public const string NATIVE_ADVANCED = <<<'HTML'
    <x-select.native :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" />
    HTML;

    public const string NATIVE_ADVANCED_DIFFERENT_INDEXES = <<<'HTML'
    <x-select.native :options="[
        ['name' => 'TALL', 'id' => 1],
        ['name' => 'LIVT', 'id' => 2],
    ]" select="label:name|value:id" />
    HTML;

    /* Styled Common */

    public const string STYLED_BASIC = <<<'HTML'
    <x-select.styled :options="[1,2,3]" />
    HTML;

    public const string STYLED_LABEL_HINT = <<<'HTML'
    <x-select.styled label="Select One Option"
                     placeholder="Custom Placeholder"
                     hint="You can choose 1, 2 or 3"
                     :options="[1,2,3]" />
    HTML;

    public const string STYLED_READONLY_DISABLED = <<<'HTML'
    <x-select.styled label="Readonly" :options="[1, 2, 3]" value="2" readonly />
    <x-select.styled label="Disabled" :options="[1, 2, 3]" value="2" disabled />
    HTML;

    public const string STYLED_PLACEHOLDERS = <<<'HTML'
    <!-- Changing only the placeholder of the input -->
    <x-select.styled placeholder="Custom Placeholder" ... />

    <!-- Changing all placeholders -->
    <x-select.styled :placeholders="[
                        'default' => 'This is the default placeholder',
                        'search'  => 'This is the search placeholder',
                        'empty'   => 'This is the empty placeholder',
                     ]" ... />
    HTML;

    public const string STYLED_REQUIRED = <<<'HTML'
    <x-select.styled :options="[1,2,3]" required />
    HTML;

    public const string STYLED_MULTIDIMENSIONAL = <<<'HTML'
    <x-select.styled  :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" />
    HTML;

    public const string STYLED_MULTIDIMENSIONAL_DIFFERENT_INDEXES = <<<'HTML'
    <x-select.styled  :options="[
        ['name' => 'TALL', 'id' => 1],
        ['name' => 'LIVT', 'id' => 2],
    ]" select="label:name|value:id" />
    HTML;

    public const string STYLED_DISABLED = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1, 'disabled' => true],
        ['label' => 'LIVT', 'value' => 2],
    ]" />
    HTML;

    public const string STYLED_GROUPED = <<<'HTML'
    <x-select.styled :options="[
        [
            'label' => 'Brazil',
            'description' => 'South America',
            'value' => [
                ['label' => 'São Paulo', 'value' => 4],
                ['label' => 'Rio de Janeiro', 'value' => 5],
            ]
        ],
        [
            'label' => 'United States',
            'value' => [
                ['label' => 'New York', 'value' => 7],
                ['label' => 'Los Angeles', 'value' => 8],
            ]
        ],
    ]" />
    HTML;

    public const string STYLED_LIMIT = <<<'HTML'
    <!-- Applicable only when selection is multiple -->

    <x-select.styled :limit="2" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
        ['label' => 'Blade', 'value' => 3],
        ['label' => 'API', 'value' => 4],
    ]" multiple />
    HTML;

    public const string STYLED_IMAGE = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'image' => 'https://unavatar.io/github/taylorotwell'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'image' => 'https://unavatar.io/github/nunomaduro'],
        ['label' => 'Jess Archer', 'value' => 3, 'image' => 'https://unavatar.io/github/jessarcher'],
    ]" />
    HTML;

    public const string STYLED_IMAGE_DIFFERENT_INDEX = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'preview' => 'https://unavatar.io/github/taylorotwell'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'preview' => 'https://unavatar.io/github/nunomaduro'],
        ['label' => 'Jess Archer', 'value' => 3, 'preview' => 'https://unavatar.io/github/jessarcher'],
    ]" select="label:label|value:value|image:preview" />
    HTML;

    public const string STYLED_DESCRIPTION = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'description' => 'Taylor Otwell is the creator of Laravel'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'description' => 'Nuno Maduro is the creator of PestPHP'],
        ['label' => 'Jess Archer', 'value' => 3, 'description' => 'Jess Archer is the creator of Laravel Prompts'],
    ]" />
    HTML;

    public const string STYLED_DESCRIPTION_DIFFERENT_INDEX = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'note' => 'Taylor Otwell is the creator of Laravel'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'note' => 'Nuno Maduro is the creator of PestPHP'],
        ['label' => 'Jess Archer', 'value' => 3, 'note' => 'Jess Archer is the creator of Laravel Prompts'],
    ]" select="label:label|value:value|description:note" />
    HTML;

    public const string STYLED_MULTIPLE = <<<'HTML'
    <x-select.styled :options="[1,2,3,4,5,6]" multiple />
    HTML;

    public const string STYLED_SEARCHABLE = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" searchable />
    HTML;

    public const string STYLED_LAZY = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'PHP', 'value' => 1],
        ['label' => 'JavaScript', 'value' => 2],
        ['label' => 'Python', 'value' => 3],
        ['label' => 'Java', 'value' => 4],
        ['label' => 'C#', 'value' => 5],
        ['label' => 'C++', 'value' => 6],
        ['label' => 'Ruby', 'value' => 7],
        ['label' => 'Swift', 'value' => 8],
        ['label' => 'Kotlin', 'value' => 9],
        ['label' => 'Go', 'value' => 10],
        ['label' => 'TypeScript', 'value' => 11],
        ['label' => 'C', 'value' => 12],
        ['label' => 'Objective-C', 'value' => 13],
        ['label' => 'R', 'value' => 14],
        ['label' => 'Perl', 'value' => 15],
        ['label' => 'Scala', 'value' => 16],
        ['label' => 'Haskell', 'value' => 17],
        ['label' => 'Lua', 'value' => 18],
        ['label' => 'Rust', 'value' => 19],
        ['label' => 'Dart', 'value' => 20],
        ['label' => 'Assembly', 'value' => 21],
        ['label' => 'SQL', 'value' => 22],
        ['label' => 'NoSQL', 'value' => 23],
        ['label' => 'HTML', 'value' => 24],
        ['label' => 'CSS', 'value' => 25],
        ['label' => 'Bash', 'value' => 26],
        ['label' => 'PowerShell', 'value' => 27],
        ['label' => 'Groovy', 'value' => 28],
        ['label' => 'Visual Basic', 'value' => 29],
        ['label' => 'Fortran', 'value' => 30],
    ]" lazy="10" />
    HTML;

    public const string STYLED_SLOT = <<<'HTML'
    <x-select.styled searchable :options="[1,2,3]">
        <x-slot:after>
            <div class="px-2 mb-2 flex justify-center items-center">
                <x-button x-on:click="show = false; $dispatch('confirmed', { term: search })">
                    <span x-html="`Create user <b>${search}</b>`"></span>
                </x-button>
            </div>
        </x-slot:after>
    </x-select.styled>
    HTML;

    public const string STYLED_EVENTS = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" x-on:select="alert(`Select: ${JSON.stringify($event.detail.select)}`)"
       x-on:remove="alert(`Remove: ${JSON.stringify($event.detail.select)}`)"
       multiple />
    HTML;

    public const string STYLED_ALPINEJS = <<<'HTML'
    <x-select.styled id="languages" :options="[
        ['label' => 'PHP', 'value' => 1],
        ['label' => 'JavaScript', 'value' => 2],
        ['label' => 'Python', 'value' => 3],
    ]" />

    <x-button x-on:click="$tsui.open.select('languages')">
        Open
    </x-button>

    <x-button x-on:click="$tsui.close.select('languages')">
        Close
    </x-button>
    HTML;

    /* Styled API */

    public const string STYLED_API = <<<'HTML'
    <x-select.styled :request="route('api.users')" />
    HTML;

    public const string STYLED_API_UNFILTERED = <<<'HTML'
    <x-select.styled :request="route('api.users')" unfiltered />
    HTML;

    public const string STYLED_API_ADVANCED = <<<'HTML'
    <x-select.styled :request="[
                        'url' => route('api.users'),
                        'method' => 'get',
                        'params' => ['library' => 'TallStackUi'],
                     ]" />
    HTML;

    public const string STYLED_API_UNFILTERED_QUERY = <<<'HTML'
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Database\Eloquent\Builder;

    Route::get('/users', function (Request $request) {
        $search = $request->get('search');

        return User::query()
            ->when($search, fn (Builder $query) => $query->where('name', 'like', "%{$search}%"))
            ->unless($search, fn (Builder $query) => $query->limit(10))
            ->get()
            ->map(fn (User $user): array => [
                'label' => $user->name,
                'value' => $user->id,
            ]);
    })->name('api.users');
    HTML;

    public const string CUSTOMIZATION_NATIVE = <<<'HTML'
    TallStackUi::customize()
        ->select()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_STYLED = <<<'HTML'
    TallStackUi::customize()
        ->select('styled')
        ->block('block', 'classes');
    HTML;
}
