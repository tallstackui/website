<section id="ai" class="landing-section landing-section--ruled scroll-mt-10">
    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
        <div class="min-w-0 lg:col-span-5" data-reveal>
            <p class="landing-eyebrow">
                <span class="landing-eyebrow-index">06</span>
                AI-native
            </p>
            <h2 class="landing-section-heading mt-5">Docs your <span class="landing-serif">agents</span> can read.</h2>
            <p class="landing-section-subheading mt-5">
                TallStackUI ships an official MCP server that Claude Code, Cursor or any MCP client can query: component
                discovery, full documentation, free-text search and the entire soft customization map. If you prefer raw
                files, every component's docs are also served as plain Markdown.
            </p>

            <a href="{{ route('documentation', ['ai']) }}" wire:navigate class="landing-cta-primary mt-8">
                Set up your editor
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>

        <div class="min-w-0 lg:col-span-7" data-reveal style="--reveal-delay: 0.1s">
            <div class="landing-ide">
                <div class="flex items-center gap-3 border-b border-white/5 px-4 py-2.5">
                    <div class="landing-panel-chrome-dots" aria-hidden="true">
                        <span class="bg-white/15!"></span><span class="bg-white/15!"></span
                        ><span class="bg-white/15!"></span>
                    </div>
                    <span class="flex-1 text-center font-mono text-xs tracking-[0.04em] text-neutral-500">terminal</span>
                    <span class="w-12"></span>
                </div>
                <div class="space-y-4 p-5 font-mono text-[0.78rem] leading-relaxed">
                    <div>
                        <p class="text-neutral-500"># Add the MCP server to Claude Code</p>
                        <p class="text-neutral-200">
                            <span class="text-pink-500">$</span> claude mcp add --transport http tallstackui
                            <span class="text-violet-400">https://tallstackui.com/mcp/tallstackui</span>
                        </p>
                    </div>
                    <div>
                        <p class="text-neutral-500"># Or read any component as plain Markdown</p>
                        <p class="text-neutral-200">
                            <span class="text-pink-500">$</span> curl https://tallstackui.com/ai/<span
                                class="text-violet-400"
                                >chart</span
                            >.md
                        </p>
                    </div>
                    <div class="rounded-lg border border-white/10 bg-white/[0.03] p-4 text-[0.72rem] text-neutral-400">
                        <p>
                            <span class="text-emerald-400">✓</span> list_components · 84 components, grouped and
                            summarized
                        </p>
                        <p class="mt-1">
                            <span class="text-emerald-400">✓</span> get_component · full docs, per section
                        </p>
                        <p class="mt-1">
                            <span class="text-emerald-400">✓</span> search_documentation · free-text, with fuzzy
                            fallback
                        </p>
                        <p class="mt-1">
                            <span class="text-emerald-400">✓</span> search_customization · every soft customization
                            block
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
