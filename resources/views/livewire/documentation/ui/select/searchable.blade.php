<?php

use TallStackUi\Traits\Interactions;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    use Interactions;

    public int $model = 1;
    public int $value = 1;
    public array $options = [1,2,3];

    #[On('confirmed')]
    public function confirmed(string $term): void
    {
        $this->dialog()->success('Dispatched', "Term: $term");
    }
} ?>

<div>
    @if ($model === 1)
        <x-select.styled :request="route('api.users')"
                        select="label:name|value:id"
                        wire:model="value"
        />
    @elseif ($model === 2)
        <x-select.styled :request="route('api.users')"
                        select="label:name|value:id"
                        label="Select One User"
                        hint="You can choose whoever you want"
                        wire:model="value"
        />
    @elseif ($model === 3)
        <x-select.styled :request="route('api.users')"
                        select="label:name|value:id"
                        wire:model="options"
                        multiple
        />
    @elseif ($model === 4)
        <x-select.styled :request="[
                           'url' => route('api.users'),
                           'method' => 'get',
                           'params' => [
                               'library' => 'TallStackUi',
                           ],
                       ]"
                        select="label:name|value:id"
                        wire:model="value"
        />
    @elseif ($model === 5)
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
    @endif
</div>
