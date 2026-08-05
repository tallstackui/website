<?php

use App\Mcp\Prompts\CustomizeComponentPrompt;
use App\Mcp\Resources\ComponentIndexResource;
use App\Mcp\Resources\InternalScopesResource;
use App\Mcp\Servers\TallStackUiServer;
use App\Mcp\Tools\GetComponentTool;
use App\Mcp\Tools\ListComponentsTool;
use App\Mcp\Tools\SearchClassesTool;
use App\Mcp\Tools\SearchCustomizationTool;
use App\Mcp\Tools\SearchDocumentationTool;

test('list components returns categorized components with summaries', function () {
    TallStackUiServer::tool(ListComponentsTool::class)
        ->assertOk()
        ->assertSee('## Display')
        ->assertSee('**Alert**')
        ->assertSee('get_component');
});

test('list components filters by category', function () {
    TallStackUiServer::tool(ListComponentsTool::class, ['category' => 'Form'])
        ->assertOk()
        ->assertSee('## Form')
        ->assertDontSee('## Display');
});

test('list components exposes the guides category', function () {
    TallStackUiServer::tool(ListComponentsTool::class, ['category' => 'Guides'])
        ->assertOk()
        ->assertSee('Soft Customization Internal Scopes');
});

test('get component returns the full documentation with a sections index', function () {
    TallStackUiServer::tool(GetComponentTool::class, ['component' => 'Alert'])
        ->assertOk()
        ->assertSee('TallStackUI: Alert')
        ->assertSee('Sections:');
});

test('get component returns a single section when requested', function () {
    TallStackUiServer::tool(GetComponentTool::class, ['component' => 'Alert', 'section' => 'Attributes'])
        ->assertOk()
        ->assertSee('Alert — Attributes')
        ->assertDontSee('## Basic Usage');
});

test('get component lists available sections when the requested one is missing', function () {
    TallStackUiServer::tool(GetComponentTool::class, ['component' => 'Alert', 'section' => 'Nonexistent'])
        ->assertOk()
        ->assertSee('Available sections');
});

test('get component suggests close matches when not found', function () {
    TallStackUiServer::tool(GetComponentTool::class, ['component' => 'Alrt'])
        ->assertOk()
        ->assertSee('Did you mean')
        ->assertSee('Alert');
});

test('search documentation finds matches with section context', function () {
    TallStackUiServer::tool(SearchDocumentationTool::class, ['query' => 'dismiss'])
        ->assertOk()
        ->assertSee('Search Results')
        ->assertSee('get_component');
});

test('search documentation reaches the internal scopes guide', function () {
    TallStackUiServer::tool(SearchDocumentationTool::class, ['query' => 'internal scope'])
        ->assertOk()
        ->assertSee('Soft Customization Internal Scopes');
});

test('search documentation suggests components when nothing matches', function () {
    TallStackUiServer::tool(SearchDocumentationTool::class, ['query' => 'zzzznothing'])
        ->assertOk()
        ->assertSee('Closest component names');
});

test('search customization requires a component or query', function () {
    TallStackUiServer::tool(SearchCustomizationTool::class)
        ->assertHasErrors();
});

test('search customization filters by component', function () {
    TallStackUiServer::tool(SearchCustomizationTool::class, ['component' => 'Alert'])
        ->assertOk()
        ->assertSee('Soft Customization');
});

test('search classes returns override snippets', function () {
    TallStackUiServer::tool(SearchClassesTool::class, ['query' => 'rounded'])
        ->assertOk()
        ->assertSee('TallStackUi::customize');
});

test('component index resource serves the documentation index', function () {
    TallStackUiServer::resource(ComponentIndexResource::class)
        ->assertOk()
        ->assertSee('Component Index');
});

test('internal scopes resource serves the scopes guide', function () {
    TallStackUiServer::resource(InternalScopesResource::class)
        ->assertOk()
        ->assertSee('Internal Scopes');
});

test('customize component prompt outlines the workflow', function () {
    TallStackUiServer::prompt(CustomizeComponentPrompt::class, ['component' => 'Alert'])
        ->assertOk()
        ->assertSee('TallStackUi::customize')
        ->assertSee('internal-scopes');
});
