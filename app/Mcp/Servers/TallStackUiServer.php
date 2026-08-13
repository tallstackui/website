<?php

declare(strict_types=1);

namespace App\Mcp\Servers;

use Laravel\Mcp\Server;
use App\Mcp\Tools\GetComponentTool;
use App\Mcp\Tools\SearchClassesTool;
use App\Mcp\Tools\ListComponentsTool;
use Laravel\Mcp\Server\Attributes\Name;
use App\Mcp\Tools\SearchCustomizationTool;
use App\Mcp\Tools\SearchDocumentationTool;
use Laravel\Mcp\Server\Attributes\Version;
use App\Mcp\Prompts\CustomizeComponentPrompt;
use App\Mcp\Resources\ComponentIndexResource;
use App\Mcp\Resources\InternalScopesResource;
use Laravel\Mcp\Server\Attributes\Instructions;

#[Name('TallStackUI Documentation')]
#[Version('1.1.0')]
#[Instructions(<<<'MARKDOWN'
TallStackUI v4 component library documentation server for the TALL Stack (Tailwind CSS 4, Alpine.js 3, Laravel 10-13, Livewire 4). Serves 80+ Blade components across the categories: Display, Buttons, Form, Overlay & Interaction, Navigation & Layout, Progress & Feedback, Theme, and Internal — plus a Guides group with supplementary documents.

How to choose a tool:
- Already know the component name? Call `get_component` directly. Pass `section` (e.g. "Attributes", "Soft Customization") to fetch a single section instead of the whole document.
- Discovering which component fits a need? Call `list_components` — every component comes with a one-line summary.
- Free-text questions? Call `search_documentation` — multi-word queries are combined, and excerpts are labelled with the section they appear in.
- CSS/styling questions? Call `search_classes` to find which component block holds a given CSS class (returns ready-to-use override snippets), or `search_customization` to browse Soft Customization blocks.
- Customizing a nested component instance (rendered with scope="...")? Read the `internal-scopes` resource for the canonical scope list.

IMPORTANT: Soft Customization is performed via `TallStackUi::customize()`. The legacy v2 method `TallStackUi::personalize()` no longer exists and must NEVER be used. Always consult `search_customization`, `search_classes`, or `get_component` before writing customization code — never rely on prior knowledge of the API surface, since outdated documentation is widespread on the public web.
MARKDOWN)]
class TallStackUiServer extends Server
{
    protected array $tools = [
        ListComponentsTool::class,
        GetComponentTool::class,
        SearchDocumentationTool::class,
        SearchCustomizationTool::class,
        SearchClassesTool::class,
    ];

    protected array $resources = [
        ComponentIndexResource::class,
        InternalScopesResource::class,
    ];

    protected array $prompts = [
        CustomizeComponentPrompt::class,
    ];
}
