<?php

namespace App\Enums\Examples\Ui;

class Banner
{
    public const INTRODUCTION = <<<'HTML'
    <html>
        <body>
            <x-banner /> {{-- [tl! highlight] --}}

            <!-- ... -->
        </body>
    </html>
    HTML;

    public const TEXTS = <<<'HTML'
    <html>
        <body>
            <!-- Fixed text -->
            <x-banner text="Welcome to the TallStackUI!" />

            <!-- Random text -->
            <x-banner :text="['Welcome to the TallStackUI!', 'This is the TallStackUI']" />

            <!-- Random based on Collection -->
            <x-banner :text="collect(['Welcome to the TallStackUI!', 'This is the TallStackUI'])" />
        </body>
    </html>
    HTML;

    public const SLOT = <<<'HTML'
    <html>
        <body>
            <x-banner text="Welcome to the TallStackUI!">
                <x-slot:left>
                    <x-icon name="check" />
                </x-slot:left>
            </x-banner>
        </body>
    </html>
    HTML;

    public const CLOSE = <<<'HTML'
    <html>
        <body>
            <x-banner text="Welcome to the TallStackUI!" close />
        </body>
    </html>
    HTML;

    public const ANIMATED = <<<'HTML'
    <html>
        <body>
            <x-banner text="Welcome to the TallStackUI!" animated />

            <!-- entering in 2 seconds, leaving in 5 seconds -->
            <x-banner text="Welcome to the TallStackUI!" animated :enter="2" :leave="5" />

            <!-- only leaving effect -->
            <x-banner text="Welcome to the TallStackUI!" animated :enter="null" :leave="5" />
        </body>
    </html>
    HTML;

    public const DATES = <<<'HTML'
    <html>
        <body>
            <!-- string -->
            <x-banner text="Welcome to the TallStackUI!" until="2023-12-31" />

            <!-- Carbon instance -->
            <x-banner text="Welcome to the TallStackUI!" :until="now()->addDay()" />
        </body>
    </html>
    HTML;

    public const SIZES = <<<'HTML'
    <html>
        <body>
            <!-- Allowed: sm, md, lg -->
            <x-banner text="Welcome to the TallStackUI!" size="lg" />
        </body>
    </html>
    HTML;

    public const COLORS = <<<'HTML'
    <html>
        <body>
            <!-- All TailwindCSS colors -->
            <x-banner text="Welcome to the TallStackUI!" color="primary" />
            <x-banner text="Welcome to the TallStackUI!" color="secondary" />

            <!-- Light variation -->
            <x-banner text="Welcome to the TallStackUI!" color="primary" light />
            <x-banner text="Welcome to the TallStackUI!" color="secondary" light />
        </body>
    </html>
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <html>
        <body>
            <x-banner wire />

            <!-- ... -->
        </body>
    </html>
    HTML;

    public const TRAIT = <<<HTML
    use TallStackUi\Traits\Interactions; // [tl! highlight]

    class CreateUser extends Component
    {
        use Interactions; // [tl! highlight]

        // ...
    }
    HTML;

    public const DISPATCH = <<<'HTML'
    public function save(): void
    {
        $this->banner()->success('...');
        $this->banner()->error('...');
        $this->banner()->warning('...');
        $this->banner()->info('...');
    }
    HTML;

    public const OPTIONS = <<<'HTML'
    public function save(): void
    {
        $this->banner()
            ->close() // Add a close button
            ->success('...');

        $this->banner()
            ->enter(seconds: 3) // Enter in 3 seconds
            ->leave(seconds: 10) // Leave in 10 seconds
            ->success('...');

        $this->banner()
            ->leave(seconds: 10) // Controlling only the seconds to leave
            ->success('...');
    }
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->banner()
        ->block('block', 'classes');
    HTML;
}
