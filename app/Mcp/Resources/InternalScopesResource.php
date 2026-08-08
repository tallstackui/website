<?php

declare(strict_types=1);

namespace App\Mcp\Resources;

use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Resource;
use App\Support\ComponentDocumentation;

class InternalScopesResource extends Resource
{
    protected string $name = 'internal-scopes';

    protected string $title = 'Soft Customization Internal Scopes';

    protected string $description = 'Canonical list of every internal scope="..." declared when a TallStackUI component renders nested components (e.g. <x-pin /> rendering an internal <x-label />). Required reading before customizing nested component instances independently of their standalone versions.';

    protected string $uri = 'tallstackui://docs/internal-scopes';

    protected string $mimeType = 'text/markdown';

    public function handle(ComponentDocumentation $documentation): Response
    {
        return Response::text($documentation->raw('soft-customization-internal-scopes.md') ?? 'Internal scopes guide not available.');
    }
}
