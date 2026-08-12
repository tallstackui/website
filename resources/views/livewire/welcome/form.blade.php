<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $age = null;

    public ?string $country = null;

    public ?string $color = null;

    public ?string $developer = null;

    public ?string $secret = null;

    public bool $secret_accepted = false;

    public bool $terms = false;

    public function save(): void
    {
        $this->withValidator(function ($validator) {
            $validator->after(function ($validator) {
                if ($this->secret === "12345") {
                    $this->secret_accepted = true;
                }
            });
        })->validate();

        $this->dialog()
            ->success(
                "Success!",
                "You have completed the example form successfully. Welcome to the TallStackUI community!",
            )
            ->send();

        $this->reset();
    }

    protected function rules(): array
    {
        return [
            "name" => ["required", "min:6"],
            "email" => ["required"],
            "age" => ["required", "numeric", "gte:10"],
            "country" => ["required"],
            "color" => ["required"],
            "developer" => ["required"],
            "secret" => ["required"],
            "terms" => ["required", "boolean"],
        ];
    }
};

?>

<div>
    <x-card shadowless bordered>
        <x-errors close />
        <form wire:submit.prevent="save">
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="col-span-1">
                    <x-input
                        label="Name *"
                        hint="Your full name"
                        icon="user"
                        wire:model="name"
                    />
                </div>
                <div class="col-span-1">
                    <x-input
                        label="E-mail *"
                        hint="Use your Gmail"
                        suffix="@gmail.com"
                        wire:model="email"
                    />
                </div>
                <div class="col-span-1">
                    <x-number
                        label="Age *"
                        hint="Your current age"
                        icon="user"
                        delay="1"
                        centralized
                        wire:model="age"
                    />
                </div>
                <div class="col-span-1">
                    <x-select.styled
                        label="Country *"
                        hint="Select your country"
                        wire:model="country"
                        required
                        :options="['Brazil', 'U.S', 'Canada', 'Other']"
                    />
                </div>
                <div class="col-span-1">
                    <x-color
                        label="Color *"
                        hint="Select the theme color"
                        selectable
                        picker
                        wire:model="color"
                    />
                </div>
                <div class="col-span-1">
                    <x-select.styled
                        :request="route('api.users')"
                        multiple
                        label="Preferable Developer *"
                        hint="You can choose more than one"
                        wire:model="developer"
                    />
                </div>
                <div class="col-span-full">
                    <div class="flex justify-center">
                        <x-pin
                            prefix="TS-"
                            length="5"
                            clear
                            label="Secret Code *"
                            hint="Enter the code: 12345"
                            wire:model="secret"
                        />
                    </div>
                    @if ($secret_accepted)
                        <div class="my-4">
                            <x-alert
                                color="green"
                                icon="check-circle"
                                close
                                light
                            >
                                You have inserted the correct code!
                            </x-alert>
                        </div>
                    @endif
                </div>
                <div class="col-span-1">
                    <x-toggle
                        label="I accept the terms of use"
                        hint="You must accept the terms of use"
                        wire:model="terms"
                    />
                </div>
            </div>
            <div class="flex justify-end">
                <x-button type="submit">Submit</x-button>
            </div>
            <p
                class="text-dark-800/30 dark:text-dark-100/50 text-xs leading-6 font-medium"
            >
                * This form is an example
            </p>
        </form>
    </x-card>
</div>
