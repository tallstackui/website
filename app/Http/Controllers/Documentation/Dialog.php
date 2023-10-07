<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Dialog extends Controller
{
    public function __invoke()
    {
        $tag = <<<HTML
<html>
    <body>
        <x-dialog />
    </body>
</html>
HTML;
        $trait = <<<HTML
use TallStackUi\Traits\Interactions; // [tl! highlight]

class CreateUser extends Component
{
    use Interactions; // [tl! highlight]

    // ...
}
HTML;
        $dispatch = <<<EOT
// ...

public function save(): void
{
    \$this->dialog()->success('...');
    \$this->dialog()->error('...');
    \$this->dialog()->warning('...');
    \$this->dialog()->info('...');
}
EOT;
        $basic = <<<EOT
\$this->dialog()->success('Success', 'This is a success message.');
\$this->dialog()->error('Error', 'This is an error message.');
\$this->dialog()->warning('Warning', 'This is a warning message.');
\$this->dialog()->info('Info', 'This is an info message.');
EOT;
        $confirmation = <<<EOT
use Livewire\Attributes\On;

public function save(): void
{
    \$this->dialog()->confirm('Warning!', 'Are you sure?', [
        'confirm' => [
            'text' => 'Confirm',
            'event' => 'confirmed',
            'params' => 'Confirmed Successfully'
        ],
        'cancel' => [
            'text' => 'Cancel',
            'event' => 'cancelled',
            'params' => 'Cancelled Successfully'
        ]
    ]);
}

#[On('confirmed')]
public function confirmed(string \$message): void
{
    \$this->dialog()->success('Success', \$message);
}

#[On('cancelled')]
public function cancelled(string \$message): void
{
    \$this->dialog()->error('Cancelled', \$message);
}
EOT;
        $zIndex = <<<HTML
<x-dialog z-index="z-50" />
HTML;
        $blur = <<<HTML
<x-dialog blur />
HTML;

        return view('documentation.dialog', compact('tag', 'trait', 'dispatch', 'basic', 'confirmation', 'zIndex', 'blur'));
    }
}
