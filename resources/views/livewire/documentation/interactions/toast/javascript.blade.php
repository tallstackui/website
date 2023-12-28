<?php

use Livewire\Volt\Component;

new class extends Component {} ?>

<div>
    <x-button color="green" x-on:click="$toast('Success', 'This is a success message.').success()">Success</x-button>
    <x-button color="red" x-on:click="$toast('Error', 'This is an error message.').error()">Error</x-button>
    <x-button color="yellow" x-on:click="$toast('Warning', 'This is a warning message.').warning()">Warning</x-button>
    <x-button color="blue" x-on:click="$toast('Info', 'This is an info message.').info()">Info</x-button>
</div>
