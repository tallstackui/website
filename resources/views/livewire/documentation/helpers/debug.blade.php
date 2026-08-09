<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public ?string $personalization = null;

    public function mount(): void
    {
        config()->set("ts-ui.debug.status", true);

        config()->set("ts-ui.debug.environments", ["local", "production"]);
    }

    public function rendered(): void
    {
        config()->set("ts-ui.debug.status", false);
    }
};

?>

<div class="mt-4 flex justify-center">
    <x-button
        text="This is the TallStackUI"
        color="purple"
        icon="photo"
        position="right"
        id="example"
    />
</div>
