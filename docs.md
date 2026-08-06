# TallStackUI MCP Server

MCP server exposing the TallStackUI documentation to AI agents. Registered at `/mcp/tallstackui` (`routes/ai.php`), implemented in `app/Mcp/`, backed by the AI-generated Markdown docs shipped in `vendor/tallstackui/tallstackui/.ai` and parsed by `App\Support\ComponentDocumentation`.

## Tools

| Tool | Purpose |
|------|---------|
| `list_components` | Lists all components grouped by category, each with a one-line summary. Optional `category` filter (including `Guides`). |
| `get_component` | Full documentation of a component. Optional `section` argument fetches a single section; responses include a sections index. Unknown names return fuzzy "did you mean" suggestions. |
| `search_documentation` | Multi-term full-text search across components and guides (AND with OR fallback, heading matches rank higher). Excerpts are labelled with the section they appear in. |
| `search_customization` | Soft Customization blocks and snippets. Requires at least one of `component` or `query`. |
| `search_classes` | Finds which component blocks contain a given CSS class, with ready-to-use `TallStackUi::customize()` override snippets. |

## Resources

| Resource | URI | Purpose |
|----------|-----|---------|
| `component-index` | `tallstackui://docs/index` | Full Markdown index of the documentation (`index.md`). |
| `internal-scopes` | `tallstackui://docs/internal-scopes` | Canonical list of every internal `scope="..."` declared when a component renders nested components. |

## Prompts

| Prompt | Purpose |
|--------|---------|
| `customize-component` | Guided workflow to customize a component's CSS via Soft Customization: fetch the component's blocks, locate classes with `search_classes`, resolve nested scopes, and write `TallStackUi::customize()` in a service provider. Arguments: `component` (required), `goal` (optional). |

## Discovery design

Every response teaches the next step: `list_components` points to `get_component`, search results point back to full docs, and `get_component` points to the customization tools when the component supports Soft Customization. Not-found responses suggest close matches instead of dead-ending. The server instructions carry a tool-selection map so agents pick the right tool on the first call.

## Testing

`tests/Feature/McpTest.php` covers every tool (happy path and not-found), both resources, and the prompt via `TallStackUiServer::tool()/resource()/prompt()`.

## Pending

- [x] Document the new primitives (`component-index` and `internal-scopes` resources, `customize-component` prompt) on the v3 AI documentation page (`resources/views/documentation/v3/ai.blade.php`) — done: "Available Resources" and "Available Prompts" sections.
