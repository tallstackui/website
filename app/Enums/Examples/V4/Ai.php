<?php

namespace App\Enums\Examples\V4;

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

    public const string CURSOR_PROJECT = <<<'HTML'
    {
        "mcpServers": {
            "tallstackui": {
                "type": "http",
                "url": "https://tallstackui.com/mcp/tallstackui"
            }
        }
    }
    HTML;

    public const string GEMINI_CLI = <<<'HTML'
    gemini mcp add --transport http tallstackui https://tallstackui.com/mcp/tallstackui
    HTML;

    public const string GEMINI_SETTINGS = <<<'HTML'
    {
        "mcpServers": {
            "tallstackui": {
                "httpUrl": "https://tallstackui.com/mcp/tallstackui"
            }
        }
    }
    HTML;
}
