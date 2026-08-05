<?php

namespace App\Mcp\Tools;

use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class SearchCustomizationTool extends Tool
{
    protected string $name = 'search_customization';

    protected string $description = 'Searches TallStackUI soft customization options. Returns available CSS class override blocks and customization code snippets for components. Customization is performed via `TallStackUi::customize()` (v3+); the v2 method `TallStackUi::personalize()` no longer exists. Requires at least one of `component` or `query`.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'component' => ['required_without:query', 'nullable', 'string', 'min:2'],
            'query' => ['required_without:component', 'nullable', 'string', 'min:2'],
        ], [
            'component.required_without' => 'Provide at least one argument: `component` or `query`. Calling without filters would dump the customization blocks of every component.',
            'query.required_without' => 'Provide at least one argument: `component` or `query`. Calling without filters would dump the customization blocks of every component.',
        ]);

        $service = app(ComponentDocumentation::class);
        $results = $service->customization(
            $request->get('component'),
            $request->get('query'),
        );

        if ($results->isEmpty()) {
            return Response::text('No customization options found matching the given criteria. Use `search_classes` to locate a specific CSS class, or `get_component` to check whether the component supports Soft Customization.');
        }

        $output = "# Customization Results\n\n";

        foreach ($results as $result) {
            $output .= "## {$result['name']} ({$result['category']})\n\n";
            $output .= $result['customization']."\n\n---\n\n";
        }

        $output .= "**Tip:** to find which component block holds a specific CSS class, use `search_classes`.\n";

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'component' => $schema->string()->description('Filter to a specific component (e.g., "Alert", "Modal")'),
            'query' => $schema->string()->description('Search within customization blocks by name or purpose (e.g., "wrapper", "icon")'),
        ];
    }
}
