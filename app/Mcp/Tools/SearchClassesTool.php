<?php

namespace App\Mcp\Tools;

use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class SearchClassesTool extends Tool
{
    protected string $description = 'Searches for specific CSS classes across all TallStackUI components. Returns every component block that contains the given class, along with PHP code snippets showing how to override them via Soft Customization.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'query' => ['required', 'string', 'min:2'],
        ]);

        $service = app(ComponentDocumentation::class);
        $matches = $service->searchClasses(
            $request->get('query'),
            $request->get('component'),
        );

        if ($matches->isEmpty()) {
            return Response::text("No components found with CSS classes matching \"{$request->get('query')}\".");
        }

        $grouped = $matches->groupBy('key');
        $query = $request->get('query');

        $output = "# CSS Class Search Results for \"{$query}\"\n\n";
        $output .= "Found {$matches->count()} blocks across {$grouped->count()} components.\n\n";

        foreach ($grouped as $key => $items) {
            $name = $items->first()['component'];
            $output .= "## {$name} (`{$key}`)\n\n";

            foreach ($items as $item) {
                $output .= "- **{$item['block']}**: `{$item['classes']}`\n";
                $output .= "  ```php\n";
                $output .= "  TallStackUi::customize('{$item['key']}')->block('{$item['block']}', 'your-classes');\n";
                $output .= "  ```\n\n";
            }
        }

        $output .= "---\n\n";
        $output .= "**Usage:** Place customizations in your `AppServiceProvider@boot` method or a dedicated service provider.\n";
        $output .= "You can also use `->append('class')`, `->prepend('class')`, `->remove('class')`, or `->replace('old', 'new')` instead of replacing the entire block.\n";

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'query' => $schema->string()->required()->description('CSS class or fragment to search for (e.g., "rounded", "p-4", "dark:bg", "border")'),
            'component' => $schema->string()->description('Optional filter by component name or key (e.g., "input", "alert", "select.styled")'),
        ];
    }
}
