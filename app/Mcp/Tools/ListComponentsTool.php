<?php

namespace App\Mcp\Tools;

use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class ListComponentsTool extends Tool
{
    protected string $name = 'list_components';

    protected string $description = 'Lists all TallStackUI components grouped by category, each with a one-line summary. Optionally filter by category name. Use this to discover which component fits a need before calling `get_component`.';

    public function handle(Request $request): Response
    {
        $service = app(ComponentDocumentation::class);
        $grouped = $service->list($request->get('category'));

        if ($grouped->isEmpty()) {
            return Response::text('No components found matching the given category. Call this tool without arguments to list every category.');
        }

        $output = "# TallStackUI Components\n\n";

        foreach ($grouped as $category => $components) {
            $output .= "## {$category}\n\n";

            foreach ($components as $component) {
                $suffix = $component['livewire_only'] ? ' *(Livewire only)*' : '';
                $summary = $component['summary'] ? " — {$component['summary']}" : '';
                $output .= "- **{$component['name']}**{$suffix}{$summary}\n";
            }

            $output .= "\n";
        }

        $output .= "---\n\n";
        $output .= "**Next steps:** `get_component` for the full documentation of a component, `search_documentation` for free-text search, `search_classes` to locate CSS classes for Soft Customization.\n";

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'category' => $schema->string()->description('Filter by category name (case-insensitive partial match). Examples: "Form", "Display", "Buttons", "Guides"'),
        ];
    }
}
