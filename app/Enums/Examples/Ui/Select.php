<?php

namespace App\Enums\Examples\Ui;

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

    /* Styled Common */

    public const STYLED_BASIC = <<<'HTML'
    <x-select.styled wire:model="value" :options="[1,2,3]" />
    HTML;

    public const STYLED_LABEL_HINT = <<<'HTML'
    <x-select.styled label="Select One Option"
                     hint="You can choose 1, 2 or 3"
                     wire:model="value"
                     :options="[1,2,3]" />
    HTML;

    public const STYLED_MULTIDIMENSIONAL = <<<'HTML'
    <x-select.styled wire:model="value" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" />
    HTML;

    public const STYLED_MULTIPLE = <<<'HTML'
    <!-- The Livewire property to bind must be an array -->

    <x-select.styled wire:model="options" :options="[1,2,3,4,5,6]" multiple />
    HTML;

    public const STYLED_SEARCHABLE = <<<'HTML'
    <x-select.styled wire:model="value" :options="[
        ['label' => 'TALL', 'value' => 1],
        ['label' => 'LIVT', 'value' => 2],
    ]" select="label:label|value:value" searchable />
    HTML;

    public const STYLED_SLOT = <<<'HTML'
    <x-select.styled label="Select One Option"
                     hint="Enter any random value to see the slot"
                     wire:model="value"
                     searchable
                     :options="[1,2,3]">
        <x-slot:after>
            <div class="px-2 mb-2 flex justify-center items-center">
                <x-button x-on:click="show = false; $dispatch('confirmed', { term: search })">
                    <span x-html="`Create user <b>${search}</b>`"></span>
                </x-button>
            </div>
        </x-slot:after>
    </x-select.styled>
    HTML;

    /* Styled Searchable */

    public const SEARCHABLE = <<<'HTML'
    <x-select.styled :request="route('api.users')"
                     select="label:name|value:id"
                     wire:model="value" />
    HTML;

    public const SEARCHABLE_LABEL_HINT = <<<'HTML'
    <x-select.styled :request="route('api.users')"
                     select="label:name|value:id"
                     label="Select One User"
                     hint="You can choose whoever you want"
                     wire:model="value" />
    HTML;

    public const SEARCHABLE_MULTIPLE = <<<'HTML'
    <!-- The Livewire property to bind must be an array -->

    <x-select.styled :request="route('api.users')"
                     select="label:name|value:id"
                     wire:model="options"
                     multiple />
    HTML;

    public const SEARCHABLE_ADVANCED = <<<'HTML'
    <!-- Method can be 'get' or 'post' -->

    <x-select.styled :request="[
                        'url' => route('api.users'),
                        'method' => 'get',
                        'params' => ['library' => 'TallStackUi'],
                     ]"
                     select="label:name|value:id"
                     wire:model="value" />
    HTML;

    public const SEARCHABLE_SLOT = <<<'HTML'
    <x-select.styled :request="route('api.users')"
                     select="label:name|value:id"
                     label="Select One User"
                     hint="Enter any random value to see the slot"
                     wire:model="value">
        <x-slot:after>
            <div class="px-2 mb-2 flex justify-center items-center">
                <x-button x-on:click="show = false; $dispatch('confirmed', { term: search })">
                    <span x-html="`Create user <b>${search}</b>`"></span>
                </x-button>
            </div>
        </x-slot:after>
    </x-select.styled>
    HTML;

    public const ELOQUENT = <<<'HTML'
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::get('/users', function (Request $request) {
        // getting initial selected values
        $selected = json_decode($request->get('selected', []), true);

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

    public const PERSONALIZATION_SEARCHABLE = <<<'HTML'
    TallStackUi::personalize()
        ->select('searchable')
        ->block('block', 'classes');
    HTML;
}
