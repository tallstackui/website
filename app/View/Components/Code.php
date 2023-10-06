<?php

namespace App\View\Components;

use Torchlight\Blade\CodeComponent;

class Code extends CodeComponent
{
    public function __construct(
        string $language = 'text',
        ?string $theme = null,
        ?string $contents = null,
        ?array $swap = null,
        array $postProcessors = [],
        ?string $torchlightId = null,
        bool $lineNumbers = true,
    ) {
        parent::__construct($language, $theme, $contents, $swap, $postProcessors, $torchlightId);

        config()->set('torchlight.options.lineNumbers', $lineNumbers);
    }

    public function render(): string
    {
        $html = parent::render();

        return "<pre>{$html}</pre>";
    }
}
