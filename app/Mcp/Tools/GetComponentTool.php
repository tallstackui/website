<?php

namespace App\Mcp\Tools;

use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class GetComponentTool extends Tool
{
    protected string $description = 'Retrieves the full documentation for a specific TallStackUI component, including attributes, slots, usage examples, and customization options.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'component' => ['required', 'string', 'min:2'],
        ]);

        $service = app(ComponentDocumentation::class);
        $result = $service->get($request->get('component'));

        if (! $result) {
            return Response::text(
                "Component \"{$request->get('component')}\" not found. Use the `list_components` tool to see all available components."
            );
        }

        return Response::text($result['content']);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'component' => $schema->string()->required()->description('Component name (e.g., "Alert", "Modal", "Select Styled", "Input")'),
        ];
    }
}
