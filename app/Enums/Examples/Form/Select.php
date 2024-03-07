<?php

namespace App\Enums\Examples\Form;

class Select
{
    /* Native */

    public const NATIVE_BASIC = <<<'HTML'
    <x-select.native :options="[1,2,3]" />
    HTML;

    public const NATIVE_LABEL_HINT = <<<'HTML'
    <x-select.native label="Select One Option"
                     hint="You can choose 1, 2 or 3"
                     :options="[1,2,3]" />
    HTML;

    public const NATIVE_ADVANCED = <<<'HTML'
    <x-select.native :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const NATIVE_INVALIDATE = <<<'HTML'
    <x-select.native :options="[1,2,3]" invalidate />
    HTML;

    /* Styled Common */

    public const STYLED_BASIC = <<<'HTML'
    <x-select.styled :options="[1,2,3]" />
    HTML;

    public const STYLED_LABEL_HINT = <<<'HTML'
    <x-select.styled label="Select One Option"
                     placeholder="Custom Placeholder"
                     hint="You can choose 1, 2 or 3"
                     :options="[1,2,3]" />
    HTML;

    public const STYLED_PLACEHOLDERS = <<<'HTML'
    <!-- Changing only the placeholder of the input -->
    <x-select.styled placeholder="Custom Placeholder" ... />

    <!-- Changing all placeholders -->
    <x-select.styled :placeholders="[
                        'default' => 'This is the default placeholder',
                        'search'  => 'This is the search placeholder',
                        'empty'   => 'This is the empty placeholder',
                     ]" ... />
    HTML;

    public const STYLED_REQUIRED = <<<'HTML'
    <x-select.styled :options="[1,2,3]" required />
    HTML;

    public const STYLED_MULTIDIMENSIONAL = <<<'HTML'
    <x-select.styled  :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_DISABLED = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1, 'disabled' => true],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_LIMIT = <<<'HTML'
    <!-- Applicable only when selection is multiple -->

    <x-select.styled :limit="2" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
        ['label' => 'Blade', 'value' => 3],
        ['label' => 'API', 'value' => 4],
    ]" select="label:label|value:value" multiple />
    HTML;

    public const STYLED_IMAGE = <<<'HTML'
    <!-- The index of the image can be: `image`, `img`, or `img_src` -->

    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'image' => 'https://unavatar.io/github/taylorotwell'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'image' => 'https://unavatar.io/github/nunomaduro'],
        ['label' => 'Jess Archer', 'value' => 3, 'image' => 'https://unavatar.io/github/jessarcher'],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_DESCRIPTION = <<<'HTML'
    <!-- The index of the description can be: `description` or `note` -->

    <x-select.styled :options="[
        ['label' => 'Taylor Otwell', 'value' => 1, 'description' => 'Taylor Otwell is the creator of Laravel'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'description' => 'Nuno Maduro is the creator of PestPHP'],
        ['label' => 'Jess Archer', 'value' => 3, 'description' => 'Jess Archer is the creator of Laravel Prompts'],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_MULTIPLE = <<<'HTML'
    <x-select.styled :options="[1,2,3,4,5,6]" multiple />
    HTML;

    public const STYLED_SEARCHABLE = <<<'HTML'
    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" searchable />
    HTML;

    public const STYLED_SLOT = <<<'HTML'
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

    public const STYLED_EVENTS = <<<'HTML'
    <!-- Select: receive the select object in $event.detail.select -->
    <!-- Remove: receive the removed object in $event.detail.select -->

    <x-select.styled :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value"
       x-on:select="alert(`Select: ${JSON.stringify($event.detail.select)}`)"
       x-on:remove="alert(`Remove: ${JSON.stringify($event.detail.select)}`)"
       multiple />
    HTML;

    /* Styled API */

    public const STYLED_API = <<<'HTML'
    <x-select.styled :request="route('api.users')"
                     select="label:name|value:id" />
    HTML;

    public const STYLED_API_ADVANCED = <<<'HTML'
    <!-- Method can be 'get' or 'post' -->

    <x-select.styled :request="[
                        'url' => route('api.users'),
                        'method' => 'get',
                        'params' => ['library' => 'TallStackUi'],
                     ]" select="label:name|value:id" />
    HTML;

    public const ELOQUENT = <<<'HTML'
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::get('/users', function (Request $request) {
        // getting initial selected values
        $selected = json_decode($request->get('selected', ''), true);

        return User::query()
            // searching when type in the select input
            ->when(
                $search = $request->get('search'),
                fn ($query) => $query->where('name', 'like', "%{$search}%")
            )
            ->when(!$search && $selected, function ($query) use ($selected) {
                // selecting the initial selected values
                $query->whereIn('id', $selected)
                    // or selecting the other users ordered by creation date
                    ->orWhere(function ($query) use ($selected) {
                        $query->whereNotIn('id', $selected)
                            ->orderBy('created_at');
                    });
            })
            ->limit(10)
            ->get()
            // mapping to the expected format
            ->map(fn (User $user) => $user->only('id', 'name'));
    })->name('api.users');
    HTML;

    public const PERSONALIZATION_NATIVE = <<<'HTML'
    TallStackUi::personalize()
        ->select()
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_STYLED = <<<'HTML'
    TallStackUi::personalize()
        ->select('styled')
        ->block('block', 'classes');
    HTML;
}
