@php
    use App\Support\ComponentDocumentation;

    $documentation = app(ComponentDocumentation::class);
    $components = $documentation
        ->list()
        ->flatten(1)
        ->map(fn (array $component) => [...$component, "url" => route("ai.component", ["name" => $documentation->slug($component["file"])])]);
@endphp

<x-layout :$content>
    <x-slot:title>AI</x-slot>
    <x-slot:description>
        AI-powered development with TallStackUI.
    </x-slot>
    <x-section title="AI-Powered Development" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI ships with AI-ready documentation in its
                <x-block>.ai/</x-block>
                directory, designed to give AI assistants (GitHub Copilot,
                Claude, Cursor, etc.) full component knowledge. Each component
                has a dedicated markdown file with attributes, slots, usage
                examples, and customization options. In addition, TallStackUI
                provides an MCP server hosted on this documentation website,
                giving AI assistants real-time access to component documentation
                without needing local files.
            </p>
        </div>
    </x-section>
    <x-section title="Component Instructions" disable-copy>
        <div class="space-y-4">
            <p>
                The following component instruction files are available in the
                <x-block>.ai/</x-block>
                directory of the TallStackUI package. Each file contains
                comprehensive documentation for AI assistants, including
                attributes, slots, usage examples, and soft customization
                options.
            </p>
            <x-table
                :headers="[
                    ['index' => 'name', 'label' => 'Component'],
                    ['index' => 'file', 'label' => 'Instructions'],
                ]"
                :rows="$components"
            >
                @interact("column_file", $row)
                    <div class="flex items-center gap-2">
                        <a
                            href="{{ $row["url"] }}"
                            class="text-pink-600 underline dark:text-pink-400"
                            target="_blank"
                        >
                            {{ $row["file"] }}
                        </a>
                        <x-clipboard :text="$row['url']" icon />
                    </div>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="MCP Server" disable-copy>
        <div class="space-y-4">
            <p>
                The
                <a
                    href="https://modelcontextprotocol.io"
                    target="_blank"
                    class="underline"
                >
                    Model Context Protocol (MCP)
                </a>
                is an open standard that allows AI tools to access external data
                sources. TallStackUI provides an MCP server hosted on this
                documentation website, giving AI assistants real-time access to
                component documentation without needing local files. The MCP
                server endpoint is available at:
            </p>
            <x-clipboard :text="url('/mcp/tallstackui')" />
            <x-warning>
                The MCP server always point to the latest version of the
                TallStackUI.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Available Tools" disable-copy>
        <div class="space-y-4">
            <p>
                The MCP server provides the following tools for AI assistants:
            </p>
            <x-table
                :headers="[
                    ['index' => 'tool', 'label' => 'Tool'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
                :rows="[
                    ['tool' => 'list_components', 'description' => 'List all available components, optionally filtered by category.'],
                    ['tool' => 'get_component', 'description' => 'Get full documentation for a specific component.'],
                    ['tool' => 'search_documentation', 'description' => 'Full-text search across all component documentation.'],
                    ['tool' => 'search_customization', 'description' => 'Search CSS class customization options for components.'],
                    ['tool' => 'search_classes', 'description' => 'Search for specific CSS classes across all components.'],
                ]"
            >
                @interact("column_tool", $row)
                    <x-block>{{ $row["tool"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Available Resources" disable-copy>
        <div class="space-y-4">
            <x-table
                :headers="[
                    ['index' => 'resource', 'label' => 'Resource'],
                    ['index' => 'uri', 'label' => 'URI'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
                :rows="[
                    ['resource' => 'component-index', 'uri' => 'tallstackui://docs/index'],
                    ['resource' => 'internal-scopes', 'uri' => 'tallstackui://docs/internal-scopes'],
                ]"
            >
                @interact("column_resource", $row)
                    <x-block>{{ $row["resource"] }}</x-block>
                @endinteract

                @interact("column_uri", $row)
                    <x-block>{{ $row["uri"] }}</x-block>
                @endinteract

                @interact("column_description", $row)
                    @if ($row["resource"] === "component-index")
                        Full Markdown index of the documentation: every component grouped by category, global
                    configuration, and customization guides.
                    @else
                        Canonical list of every internal
                        <x-block>scope="..."</x-block>
                        declared when a component renders nested components.
                        Required reading before customizing nested component
                        instances independently of their standalone versions.
                    @endif
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Available Prompts" disable-copy>
        <div class="space-y-4">
            <p>
                The MCP server also ships prompts: ready-made workflows that
                guide AI assistants step by step through common tasks:
            </p>
            <x-table
                :headers="[
                    ['index' => 'prompt', 'label' => 'Prompt'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
                :rows="[['prompt' => 'customize-component']]"
            >
                @interact("column_prompt", $row)
                    <x-block>{{ $row["prompt"] }}</x-block>
                @endinteract

                @interact("column_description", $row)
                    Guided workflow to customize the CSS of a component through
                    Soft Customization: it fetches the component blocks, locates
                    the target classes, resolves nested scopes, and writes the
                    <x-block>TallStackUi::customize()</x-block>
                    code in a service provider. Accepts a required
                    <x-block>component</x-block>
                    argument and an optional
                    <x-block>goal</x-block>
                    describing the desired change.
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Connecting to Claude Code" disable-copy>
        <div class="space-y-4">
            <p>
                The quickest way to connect the MCP server to
                <a
                    href="https://claude.ai/code"
                    target="_blank"
                    class="underline"
                >
                    Claude Code
                </a>
                is using the CLI command:
            </p>
            <x-code language="shell" :contents="$claudeCodeCli" />
            <p>
                For team sharing, create a
                <x-block>.mcp.json</x-block>
                file in your project root. This file can be committed to version
                control so all team members have access:
            </p>
            <x-code language="json" :contents="$claudeCodeProject" />
            <p>
                For personal use across all projects, add the server to your
                <x-block>~/.claude/settings.json</x-block>
                :
            </p>
            <x-code language="json" :contents="$claudeCodeSettings" />
            <p>After configuration, verify the server is connected:</p>
            <x-code language="shell" :contents="'claude mcp list'" />
        </div>
    </x-section>
</x-layout>
