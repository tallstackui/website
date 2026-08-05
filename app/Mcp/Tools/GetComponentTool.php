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
    protected string $name = 'get_component';

    protected string $description = 'Retrieves the full documentation for a specific TallStackUI component, including attributes, slots, usage examples, and customization options. Pass `section` to fetch a single section instead of the whole document.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'component' => ['required', 'string', 'min:2'],
            'section' => ['nullable', 'string', 'min:2'],
        ]);

        $service = app(ComponentDocumentation::class);
        $section = $request->get('section');
        $result = $service->get($request->get('component'), $section);

        if (! $result) {
            $suggestions = $service->suggestions($request->get('component'))->implode('`, `');

            return Response::text(
                "Component \"{$request->get('component')}\" not found. Did you mean: `{$suggestions}`? Use the `list_components` tool to see all available components."
            );
        }

        $sections = implode(' | ', $result['sections']);

        if ($section && ! $result['section']) {
            return Response::text(
                "Section \"{$section}\" not found in {$result['name']}. Available sections: {$sections}."
            );
        }

        $output = $result['section']
            ? "# {$result['name']} — {$result['section']['heading']}\n\n> All sections: {$sections}\n\n{$result['section']['content']}\n"
            : "> Sections: {$sections} — pass `section` to fetch a single one.\n\n{$result['content']}\n";

        if (in_array('Soft Customization', $result['sections'], true)) {
            $output .= "\n---\n\n**Customization:** `search_customization` with component=\"{$result['name']}\" returns its Soft Customization blocks; `search_classes` locates specific CSS classes across all components.\n";
        }

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'component' => $schema->string()->required()->description('Component name (e.g., "Alert", "Modal", "Select Styled", "Input")'),
            'section' => $schema->string()->description('Optional section heading to fetch only that part of the documentation (case-insensitive partial match). Examples: "Attributes", "Soft Customization", "Basic Usage"'),
        ];
    }
}
