<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class Ai
{
    public const string CLAUDE_CODE_CLI = <<<'HTML'
    claude mcp add --transport http tallstackui https://tallstackui.com/mcp/tallstackui
    HTML;

    public const string CLAUDE_CODE_PROJECT = <<<'HTML'
    {
        "mcpServers": {
            "tallstackui": {
                "type": "http",
                "url": "https://tallstackui.com/mcp/tallstackui"
            }
        }
    }
    HTML;

    public const string CLAUDE_CODE_SETTINGS = <<<'HTML'
    {
        "mcp": {
            "mcpServers": {
                "tallstackui": {
                    "type": "http",
                    "url": "https://tallstackui.com/mcp/tallstackui"
                }
            }
        }
    }
    HTML;
}
