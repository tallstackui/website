# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Official documentation website for [TallStackUI](https://tallstackui.com) — a component library for the TALL Stack (Tailwind, Alpine, Laravel, Livewire). The site serves versioned documentation (v1, v2, v3) with interactive component previews, code examples, and personalization demos.

## Essential Commands

```bash
# Development
composer install && npm install
npm run dev              # Vite dev server (watch mode)
npm run build            # Production build

# Testing
./vendor/bin/pest                  # Run all tests
./vendor/bin/pest --filter="V3"    # Run tests for a specific version
./vendor/bin/pest --type-coverage  # Type coverage report

# CI (lint check + type coverage + route list + tests)
composer ci

# Code formatting
./vendor/bin/pint --dirty   # Format only modified files
./vendor/bin/pint           # Format all files

# Database
php artisan migrate:fresh --seed
```

## Technology Stack

- **Backend:** PHP 8.4+, Laravel 12, Livewire 3, Volt (functional Livewire components)
- **Frontend:** TailwindCSS v4, Alpine.js, Vite 6
- **Code Highlighting:** Torchlight (requires `TORCHLIGHT_TOKEN` env var)
- **Search:** Algolia DocSearch
- **Testing:** Pest v3
- **Formatting:** Laravel Pint (preset: `laravel`, rule: `ordered_class_elements`)
- **TallStackUI:** Linked from local path (`/Users/aj/Workspace/tallstack/tallstackui`) via `^3.x-dev`

## Architecture

### Versioned Documentation Routing

Single invokable controller handles all docs: `GET /docs/{version}/{main?}/{children?}` → `PageController`.

**Flow:** URL → validate version against `VersionDiscovery::versions()` → construct view path (`documentation.{version}.{main}.{children}`) → load "On This Page" sidebar from YAML (`contents/{version}.yaml`) → resolve `Example` enum → render Blade view.

### Code Examples System

Code snippets shown in documentation are defined as PHP class constants, not inline in Blade templates:

1. `App\Enums\Example` enum maps component names to namespaced class paths (e.g., `Form\\Input`)
2. `App\Enums\Examples\V{1,2,3}\{Category}\{Component}.php` classes hold `const` heredoc strings with example HTML
3. `Example::variables()` uses reflection to extract all constants, converts keys to camelCase, and passes them to the view
4. The `apply_prefix()` helper (`app/helpers.php`) dynamically rewrites `<x-` prefixes in examples based on a user cookie

**Adding a new component's documentation:**
- Create Blade view at `resources/views/documentation/v{X}/{category}/{component}.blade.php`
- Create example class at `app/Enums/Examples/V{X}/{Category}/{Component}.php` with `const` heredoc strings
- Add case to `App\Enums\Example` enum
- Add navigation entry to `contents/v{X}.yaml`
- Add route test case to `tests/Feature/StructureTest.php`

### Version Discovery

The `VersionDiscovery` trait (used by `PageController`, `Example` enum, `ShareVersionVariable` middleware) detects the current documentation version from the route parameter. The latest version is defined as `LATEST_VERSION` constant in `app/helpers.php`.

### Livewire Volt Components

Interactive demos live in `resources/views/livewire/` as Volt functional components (mounted via `VoltServiceProvider`). These include the personalization demo, version selector, and documentation settings panel.

### View Components

Reusable Blade components in `resources/views/components/`:
- `layout/` — header, sidebar, banner, navigation
- `section.blade.php` — documentation content sections with code copy
- `preview.blade.php` — component preview with live rendering

### Content Structure (YAML)

`contents/v{1,2,3}.yaml` files define the "On This Page" sidebar navigation. Structure is hierarchical: top-level keys are categories, values are either arrays of section names or nested category → component → sections.

## Testing Policy

Do NOT write tests for v3 routes/pages unless explicitly requested.

## Key Patterns

- All documentation routes return HTTP 200 — verified by comprehensive tests in `tests/Feature/StructureTest.php`
- External APIs (Torchlight, GitHub) are faked in tests via `Http::fake()`
- Tests seed 11 demo users (`CreateUserSeeder`) for the user search API
- Dark theme is handled client-side via Alpine.js, no server state
- Component prefix personalization is stored in a browser cookie (`prefix`)
- HTTPS is forced in production and when using ngrok (`AppServiceProvider`)

## Branches

- `3.x` — v3 documentation (current development branch)
- `2.x` — main/default branch (v2 documentation)
