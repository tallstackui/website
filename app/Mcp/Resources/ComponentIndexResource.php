<?php

namespace App\Mcp\Resources;

use App\Support\ComponentDocumentation;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Resource;

class ComponentIndexResource extends Resource
{
    protected string $name = 'component-index';

    protected string $title = 'TallStackUI Component Index';

    protected string $description = 'Full Markdown index of the TallStackUI documentation: every component grouped by category, Livewire-only markers, global configuration, skeleton loading, the Soft Customization overview, and the global JavaScript API.';

    protected string $uri = 'tallstackui://docs/index';

    protected string $mimeType = 'text/markdown';

    public function handle(ComponentDocumentation $documentation): Response
    {
        return Response::text($documentation->raw('index.md') ?? 'Documentation index not available.');
    }
}
