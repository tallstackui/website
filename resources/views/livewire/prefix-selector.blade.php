<?php

use function Livewire\Volt\{state, rules, mount};
use Illuminate\Support\Facades\Cookie;

state(modal: false, prefix: null);
rules(['prefix' => ['required', 'max:5']]);

mount(fn () => $this->prefix = Cookie::get('prefix'));

$save = function () {
    $this->validate();

    Cookie::queue('prefix', $this->prefix, 60 * 24 * 365);

    $this->js(<<<JS
        location.reload();
    JS);
};

?>

<div>
    <x-button color="pink" class="w-full uppercase" wire:click="$toggle('modal')" xs>
        {{ __('Configure Prefix') }}
    </x-button>
    <x-modal :title="__('Configure Prefix')" center wire>
        <x-input label="Prefix"
                 hint="Insert the prefix you are using in your project."
                 wire:model="prefix"
                 required
                 max-length="5"/>
        <x-slot:footer>
            <x-button wire:click="save" color="green">
                SAVE
            </x-button>
        </x-slot:footer>
    </x-modal>
</div>
