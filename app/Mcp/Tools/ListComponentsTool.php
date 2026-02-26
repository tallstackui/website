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
    protected string $description = 'Lists all TallStackUI components grouped by category. Optionally filter by category name.';

    public function handle(Request $request): Response
    {
        $service = app(ComponentDocumentation::class);
        $grouped = $service->list($request->get('category'));

        if ($grouped->isEmpty()) {
            return Response::text('No components found matching the given category.');
        }

        $output = "# TallStackUI Components\n\n";

        foreach ($grouped as $category => $components) {
            $output .= "## {$category}\n\n";

            foreach ($components as $component) {
                $suffix = $component['livewire_only'] ? ' *(Livewire only)*' : '';
                $output .= "- {$component['name']}{$suffix}\n";
            }

            $output .= "\n";
        }

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'category' => $schema->string()->description('Filter by category name (case-insensitive partial match). Examples: "Form", "Display", "Overlay"'),
        ];
    }
}
