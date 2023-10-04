<?php

namespace App\Livewire\Documentation\Navigation;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Welcome extends Component
{
    public function render(): View
    {
        return view('livewire.documentation.navigation.welcome');
    }
}
