<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Collection;

class Llms
{
    public function __construct(private readonly ComponentDocumentation $documentation)
    {
        //
    }

    public function build(): string
    {
        return collect([$this->overview(), $this->reference()])
            ->concat($this->categories())
            ->push($this->optional())
            ->implode("\n\n")."\n";
    }

    private function overview(): string
    {
        return <<<'MARKDOWN'
        # TallStackUI

        > TallStackUI is a suite of 65+ Blade components for the TALL Stack — TailwindCSS, Alpine.js, Laravel and Livewire. It ships production-ready UI (forms, tables, modals, charts, layouts) as plain Blade tags that bind straight to Livewire properties through `wire:model`, and is restyled at runtime through a class customization API instead of published views.

        TallStackUI is installed as a Composer package into an existing Laravel application. It publishes no Blade views and brings no build step of its own: components render from inside the package, their JavaScript arrives through a single script tag, and their Tailwind classes are picked up by pointing `app.css` at the package source.

        ## Requirements

        - PHP 8.1 or later
        - Laravel 10, 11, 12 or 13
        - Livewire 3.5 or later
        - Alpine.js 3
        - TailwindCSS 4

        ## What it covers

        - **Form** — input, textarea, native and styled select, autocomplete, date, time, calendar, currency, color, number, password, pin, range, tag, toggle, checkbox, radio and upload (Livewire or chunked async), each already wired to labels, hints and Laravel validation errors.
        - **Data** — table with server-side sorting, search, pagination, selection and expandable rows; list; stats; key-value editor; and chart and QR code rendered as dependency-free inline SVG.
        - **Overlay** — modal, slide, dialog, toast, dropdown, command palette and tooltip, opened from Blade, from Alpine or programmatically from a Livewire component.
        - **Navigation and layout** — layout shell, header, sidebar, tab, step, accordion, breadcrumbs, timeline and dial.
        - **Feedback** — alert, banner, badge, validation error summary, progress bar and circle, rating, reaction, signature, spinner and full-screen loading overlay.

        ## Concepts

        - **Livewire binding.** Components bind with `wire:model`, nested paths included, so a Livewire Form object or an array key works as the target.
        - **Outside Livewire.** Form components also work on a plain Blade page posting to a controller: give them a `name` instead of a `wire:model` and they render a hidden input carrying the value.
        - **Soft Customization.** Tailwind classes are overridden at runtime with `TallStackUi::customize()` from a service provider — per block, globally or under a named `scope` — instead of publishing and editing views. From v3 on the method is `customize()`; the v2 `personalize()` no longer exists.
        - **Prefix.** The `prefix` config key renames every tag, so `ts-` gives `<x-ts-alert />`.
        - **Skeleton.** Card, Stats, Table, List, Step and Chart accept a `skeleton` prop that renders a structural placeholder shaped like the component itself, for the first paint before any data exists.
        - **JavaScript API.** A global `$tsui` object opens and closes modals, slides and selects, moves focus, copies to the clipboard and fires dialogs and toasts.

        ## AI documentation

        Every file listed below documents one component for AI assistants: attributes, slots, examples, configuration keys and customization blocks. They are served raw from this site and also ship inside the package, under `vendor/tallstackui/tallstackui/.ai/`. An MCP server exposing the same documentation is hosted at https://tallstackui.com/mcp/tallstackui.
        MARKDOWN;
    }

    /** The index is linked on its own because it is not one of the components it lists. */
    private function reference(): string
    {
        return "## Reference\n\n".$this->link(
            'Component Index',
            'index.md',
            'Every component grouped by category, plus global configuration, skeleton loading, the Soft Customization overview and the global JavaScript API.',
        );
    }

    /** @return Collection<int, string> */
    private function categories(): Collection
    {
        return $this->documentation->list()
            ->map(function (Collection $documents, string $category): string {
                $links = $documents->map(fn (array $document): string => $this->link(
                    $document['name'],
                    $document['file'],
                    $document['summary'],
                    $document['livewire_only'],
                ));

                return "## {$category}\n\n".$links->implode("\n");
            })
            ->values();
    }

    /** The llms.txt "Optional" section, which a crawler is free to skip. */
    private function optional(): string
    {
        return <<<'MARKDOWN'
        ## Optional

        - [Documentation](https://tallstackui.com/docs): the documentation website, with a live preview of every component.
        - [Repository](https://github.com/tallstackui/tallstackui): source code and issue tracker.
        - [Discord](https://discord.gg/sfr66WXh4A): community server.
        MARKDOWN;
    }

    private function link(string $name, string $file, ?string $summary, bool $livewire = false): string
    {
        $url         = route('ai.component', ['name' => $this->documentation->slug($file)]);
        $description = mb_trim(($livewire ? 'Livewire only. ' : '').($summary ?? ''));

        return $description === '' ? "- [{$name}]({$url})" : "- [{$name}]({$url}): {$description}";
    }
}
