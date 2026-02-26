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
    protected string $description = 'Searches TallStackUI soft customization options. Returns available CSS class override blocks and personalization code snippets for components.';

    public function handle(Request $request): Response
    {
        $service = app(ComponentDocumentation::class);
        $results = $service->customization(
            $request->get('component'),
            $request->get('query'),
        );

        if ($results->isEmpty()) {
            return Response::text('No customization options found matching the given criteria.');
        }

        $output = "# Customization Results\n\n";

        foreach ($results as $result) {
            $output .= "## {$result['name']} ({$result['category']})\n\n";
            $output .= $result['customization']."\n\n---\n\n";
        }

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
