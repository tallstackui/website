<?php

declare(strict_types=1);

namespace App\Mcp\Prompts;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Prompt;
use Laravel\Mcp\Server\Prompts\Argument;

class CustomizeComponentPrompt extends Prompt
{
    protected string $name = 'customize-component';

    protected string $title = 'Customize a TallStackUI Component';

    protected string $description = 'Guided workflow to customize the CSS of a TallStackUI component through Soft Customization (TallStackUi::customize()).';

    public function arguments(): array
    {
        return [
            new Argument(name: 'component', description: 'The component to customize (e.g. "Alert", "Select Styled")', required: true),
            new Argument(name: 'goal', description: 'What you want to change (e.g. "remove the shadow and round the corners")', required: false),
        ];
    }

    public function handle(Request $request): Response
    {
        $request->validate([
            'component' => ['required', 'string', 'min:2'],
        ]);

        $component = $request->get('component');
        $goal      = $request->get('goal') ?: 'adjust its appearance';

        return Response::text(<<<MARKDOWN
        I want to customize the TallStackUI "{$component}" component to {$goal}.

        Follow this workflow using the TallStackUI MCP tools — do not rely on prior knowledge of the API surface:

        1. Call `get_component` with component="{$component}" and section="Soft Customization" to see its customizable blocks.
        2. If you need to find where a specific CSS class lives, call `search_classes` with that class (e.g. "shadow", "rounded") filtered by this component.
        3. If the target element is a nested component rendered with scope="..." (e.g. a label inside another component), read the `internal-scopes` resource to find the correct scope before writing code.
        4. Write the customization with `TallStackUi::customize()` inside a dedicated method called from `AppServiceProvider::boot()`. Prefer the granular methods `->append()`, `->prepend()`, `->remove()`, and `->replace()` over replacing an entire block.
        5. Never use `TallStackUi::personalize()` — it was removed in v3 and no longer exists.
        MARKDOWN);
    }
}
