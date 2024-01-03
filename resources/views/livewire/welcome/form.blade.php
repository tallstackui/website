<?php

use TallStackUi\Traits\Interactions;
use function Livewire\Volt\{state, rules, uses};

uses(Interactions::class);

state([
    'name',
    'email',
    'age',
    'country',
    'color',
    'developer',
    'secret',
    'secret_accepted' => false,
    'terms',
]);

rules(fn () => [
    'name' => ['required', 'min:6'],
    'email' => ['required'],
    'age' => ['required', 'numeric', 'gte:10'],
    'country' => ['required'],
    'color' => ['required'],
    'developer' => ['required'],
    'secret' => ['required'],
    'terms' => ['required', 'boolean'],
]);

$save = function () {
    $this->withValidator(function ($validator) {
        $validator->after(function ($validator) {
            if ($this->secret === '12345') {
                $this->secret_accepted = true;
            }
        });
    })->validate();

    $this->dialog()->success('Success!', 'You have completed the example form successfully. Welcome to the TallStackUI community!');

    $this->reset();
};

?>

<div>
    <x-card>
        <x-errors close />
        <form wire:submit.prevent="save">
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="col-span-1">
                    <x-input label="Name *"
                             hint="Your full name"
                             icon="user"
                             wire:model="name" />
                </div>
                <div class="col-span-1">
                    <x-input label="E-mail *"
                             hint="Use your g-mail"
                             suffix="@gmail.com"
                             wire:model="email" />
                </div>
                <div class="col-span-1">
                    <x-number label="Age *"
                             hint="Your current age"
                             icon="user"
                             delay="1"
                             wire:model="age" />
                </div>
                <div class="col-span-1">
                    <x-select.styled label="Country *"
                                     hint="Select your country"
                                     wire:model="country"
                                     :options="['Brazil', 'U.S', 'Canada', 'Other']" />
                </div>
                <div class="col-span-1">
                    <x-color label="Color *"
                             hint="Select the theme color"
                             picker
                             wire:model="color" />
                </div>
                <div class="col-span-1">
                    <x-select.styled :request="route('api.users')"
                                     multiple
                                     select="label:name|value:id"
                                     label="Preferable Laravel Developer *"
                                     hint="You can choose more than one"
                                     wire:model="developer" />
                </div>
                <div class="col-span-full">
                    <div class="flex justify-center">
                        <x-pin prefix="TS-"
                               length="5"
                               clear
                               label="Secret Code *"
                               hint="Enter the code: 12345"
                               wire:model="secret" />
                    </div>
                    @if ($secret_accepted)
                        <div class="my-4">
                            <x-alert color="green" icon="check-circle" close light>
                                You have inserted the correct code!
                            </x-alert>
                        </div>
                    @endif
                </div>
                <div class="col-span-1">
                    <x-toggle label="I accept the terms of use"
                              hint="You must accept the terms of use"
                              wire:model="terms" />
                </div>
            </div>
            <div class="flex justify-end">
                <x-button type="submit">
                    Submit
                </x-button>
            </div>
            <p class="text-xs font-medium leading-6 text-dark-400/30 dark:text-gray-500/30">* This form is an example</p>
        </form>
    </x-card>
</div>
