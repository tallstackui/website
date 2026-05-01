<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\GetComponentTool;
use App\Mcp\Tools\ListComponentsTool;
use App\Mcp\Tools\SearchClassesTool;
use App\Mcp\Tools\SearchCustomizationTool;
use App\Mcp\Tools\SearchDocumentationTool;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('TallStackUI Documentation')]
#[Version('1.0.0')]
#[Instructions('TallStackUI v3+ component library documentation server. Provides access to 65+ Blade component definitions for the TALL Stack (Tailwind CSS 4, Alpine.js 3, Laravel, Livewire 3.5+). Start with `list_components` to see available components, then use `get_component` for full documentation. Use `search_documentation` for free-text search and `search_customization` for CSS class overrides. IMPORTANT: Soft customization in v3 is performed via `TallStackUi::customize()`. The legacy v2 method `TallStackUi::personalize()` no longer exists and must NEVER be used. Always consult `search_customization` or `get_component` before writing customization code — never rely on prior knowledge of the API surface, since v2 documentation is widespread on the public web.')]
class TallStackUiServer extends Server
{
    protected array $tools = [
        ListComponentsTool::class,
        GetComponentTool::class,
        SearchDocumentationTool::class,
        SearchCustomizationTool::class,
        SearchClassesTool::class,
    ];
}
