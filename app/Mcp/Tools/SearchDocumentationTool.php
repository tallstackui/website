<?php

namespace App\Mcp\Tools;

use App\Support\ComponentDocumentation;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
class SearchDocumentationTool extends Tool
{
    protected string $description = 'Searches across all TallStackUI component documentation for a given query. Returns matching components with contextual excerpts.';

    public function handle(Request $request): Response
    {
        $request->validate([
            'query' => ['required', 'string', 'min:2'],
            'max_results' => ['integer', 'min:1', 'max:20'],
        ]);

        $service = app(ComponentDocumentation::class);

        $results = $service->search($request->get('query'), (int) $request->get('max_results', 10));

        if ($results->isEmpty()) {
            return Response::text("No results found for \"{$request->get('query')}\".");
        }

        $output = "# Search Results for \"{$request->get('query')}\"\n\n";

        foreach ($results as $result) {
            $output .= "## {$result['name']} ({$result['category']})\n";
            $output .= "Matches: {$result['match_count']}\n\n";

            foreach ($result['excerpts'] as $excerpt) {
                $output .= "```\n{$excerpt}\n```\n\n";
            }
        }

        return Response::text($output);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'query' => $schema->string()->required()->description('Search query (minimum 2 characters). Examples: "wire:model", "color", "dark mode"'),
            'max_results' => $schema->integer()->description('Maximum number of results to return (1-20, default 10)'),
        ];
    }
}
