<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class SearchDocumentationTool extends Tool
{
    protected string $name = 'search_documentation';

    protected string $description = 'Searches across all TallStackUI component documentation and guides for a given query. Multiple words are combined (results containing every word rank first). Returns matching documents with excerpts labelled by the section they appear in.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'query'       => ['required', 'string', 'min:2'],
            'max_results' => ['integer', 'min:1', 'max:20'],
        ]);

        $service = app(ComponentDocumentation::class);

        $results = $service->search($request->get('query'), (int) $request->get('max_results', 10));

        if ($results->isEmpty()) {
            $suggestions = $service->suggestions($request->get('query'))->implode('`, `');

            return Response::text(
                "No results found for \"{$request->get('query')}\". Closest component names: `{$suggestions}`. Use `list_components` to browse every category."
            );
        }

        $output = "# Search Results for \"{$request->get('query')}\"\n\n";

        foreach ($results as $result) {
            $output .= "## {$result['name']} ({$result['category']}) — {$result['match_count']} matches\n\n";

            foreach ($result['excerpts'] as $excerpt) {
                $output .= "**{$excerpt['section']}:**\n";
                $output .= "```\n{$excerpt['text']}\n```\n\n";
            }
        }

        $output .= "---\n\n";
        $output .= "**Next step:** call `get_component` with a document name above for its full documentation (pass `section` to fetch a single section).\n";

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'query'       => $schema->string()->required()->description('Search query (minimum 2 characters). Multiple words narrow the results. Examples: "wire:model", "input mask", "dark mode"'),
            'max_results' => $schema->integer()->description('Maximum number of results to return (1-20, default 10)'),
        ];
    }
}
