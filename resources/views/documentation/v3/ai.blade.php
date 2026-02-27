@php
    use App\Support\ComponentDocumentation;
    $components = app(ComponentDocumentation::class)->list();
@endphp

<x-layout :$content>
    <x-slot:title>
        AI
    </x-slot:title>
    <x-slot:description>
        AI-powered development with TallStackUI.
    </x-slot:description>
    <x-section title="AI-Powered Development" disable-copy>
        <div class="space-y-4">
            <p>
                Starting from version 3, TallStackUI ships with AI-ready documentation in its
                <x-block>.ai/</x-block> directory, designed to give AI assistants (GitHub Copilot, Claude, Cursor, etc.)
                full component knowledge. Each component has a dedicated markdown file with attributes, slots, usage examples, and customization options. In addition,
                TallStackUI provides an <b>MCP server</b> hosted on this documentation website, giving AI assistants real-time access to
                component documentation without
                needing local files.
            </p>
        </div>
    </x-section>
    <x-section title="Component Instructions" disable-copy>
        <div class="space-y-4">
            <p>
                The following component instruction files are available in the <x-block>.ai/</x-block> directory
                of the TallStackUI package. Each file contains comprehensive documentation for AI assistants, including
                attributes, slots, usage examples, and soft customization options.
            </p>
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Component"/>
                        <x-custom-table.th label="Instructions"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    @foreach ($components as $category => $items)
                        @foreach ($items as $item)
                            <x-custom-table.tr>
                                <x-custom-table.td first>{{ $item['name'] }}</x-custom-table.td>
                                <x-custom-table.td>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('ai.component', ['name' => str_replace('components/', '', str_replace('.md', '', $item['file']))]) }}"
                                           class="underline text-pink-600 dark:text-pink-400"
                                           target="_blank">
                                            {{ $item['file'] }}
                                        </a>
                                        <x-clipboard :text="route('ai.component', ['name' => str_replace('components/', '', str_replace('.md', '', $item['file']))])" icon />
                                    </div>
                                </x-custom-table.td>
                            </x-custom-table.tr>
                        @endforeach
                    @endforeach
                </x-custom-table.tbody>
            </x-custom-table>
        </div>
    </x-section>
    <x-section title="MCP Server" disable-copy>
        <div class="space-y-4">
            <p>
                The <a href="https://modelcontextprotocol.io" target="_blank" class="underline">Model Context Protocol
                    (MCP)</a>
                is an open standard that allows AI tools to access external data sources. TallStackUI provides an MCP
                server hosted on this documentation website, giving AI assistants real-time access to component
                documentation without needing local files. The MCP server endpoint is available at:
            </p>
            <x-clipboard text="https://tallstackui.com/mcp/tallstackui"/>
        </div>
    </x-section>
    <x-section title="Available Tools" disable-copy>
        <div class="space-y-4">
            <p>
                The MCP server provides the following tools for AI assistants:
            </p>
            <x-custom-table>
                <x-custom-table.thead>
                    <x-custom-table.tr>
                        <x-custom-table.th first label="Tool"/>
                        <x-custom-table.th label="Description"/>
                    </x-custom-table.tr>
                </x-custom-table.thead>
                <x-custom-table.tbody>
                    <x-custom-table.tr>
                        <x-custom-table.td first>
                            <x-block>list_components</x-block>
                        </x-custom-table.td>
                        <x-custom-table.td>List all available components, optionally filtered by category.
                        </x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>
                            <x-block>get_component</x-block>
                        </x-custom-table.td>
                        <x-custom-table.td>Get full documentation for a specific component.</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>
                            <x-block>search_documentation</x-block>
                        </x-custom-table.td>
                        <x-custom-table.td>Full-text search across all component documentation.</x-custom-table.td>
                    </x-custom-table.tr>
                    <x-custom-table.tr>
                        <x-custom-table.td first>
                            <x-block>search_customization</x-block>
                        </x-custom-table.td>
                        <x-custom-table.td>Search CSS class customization options for components.</x-custom-table.td>
                    </x-custom-table.tr>
                </x-custom-table.tbody>
            </x-custom-table>
        </div>
    </x-section>
    <x-section title="Connecting to Claude Code">
        <div class="space-y-4">
            <p>
                The quickest way to connect the MCP server to <a href="https://claude.ai/code" target="_blank"
                                                                 class="underline">Claude Code</a>
                is using the CLI command:
            </p>
            <x-code language="shell" :contents="$claudeCodeCli"/>
            <p>
                For team sharing, create a
                <x-block>.mcp.json</x-block>
                file in your project root. This file can be
                committed to version control so all team members have access:
            </p>
            <x-code language="json" :contents="$claudeCodeProject"/>
            <p>
                For personal use across all projects, add the server to your
                <x-block>~/.claude/settings.json</x-block>
                :
            </p>
            <x-code language="json" :contents="$claudeCodeSettings"/>
            <p>
                After configuration, verify the server is connected:
            </p>
            <x-code language="shell" :contents="'claude mcp list'"/>
        </div>
    </x-section>
    <x-section title="Connecting to Cursor">
        <div class="space-y-4">
            <p>
                To connect the MCP server to <a href="https://cursor.com" target="_blank" class="underline">Cursor</a>,
                create a <x-block>.cursor/mcp.json</x-block> file in your project root:
            </p>
            <x-code language="json" :contents="$cursorProject"/>
            <p>
                You can also create this file at <x-block>~/.cursor/mcp.json</x-block> for global access across all projects.
            </p>
        </div>
    </x-section>
    <x-section title="Connecting to Gemini CLI">
        <div class="space-y-4">
            <p>
                The quickest way to connect the MCP server to <a href="https://github.com/google-gemini/gemini-cli" target="_blank" class="underline">Gemini CLI</a>
                is using the CLI command:
            </p>
            <x-code language="shell" :contents="$geminiCli"/>
            <p>
                Alternatively, add the server to your <x-block>~/.gemini/settings.json</x-block>:
            </p>
            <x-code language="json" :contents="$geminiSettings"/>
        </div>
    </x-section>
</x-layout>
