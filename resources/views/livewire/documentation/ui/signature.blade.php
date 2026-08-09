<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public int $model = 1;
};

?>

<div>
    @if ($model === 1)
        <x-signature />
    @elseif ($model === 2)
        <x-signature
            label="Sign your name"
            hint="You can revert if you have written something wrong."
        />
    @elseif ($model === 3)
        <x-signature color="#ff0000" />
    @elseif ($model === 4)
        <x-signature background="#cc1002" />
    @elseif ($model === 5)
        <x-signature line="10" />
    @elseif ($model === 6)
        <x-signature height="500" />
    @elseif ($model === 7)
        <x-signature clearable />
    @elseif ($model === 8)
        <x-signature exportable />
    @elseif ($model === 9)
        <x-signature exportable x-on:export="alert('Exported!')" />
    @elseif ($model === 10)
        <x-signature persistent />
    @endif
</div>
