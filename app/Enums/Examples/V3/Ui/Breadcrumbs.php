<?php

namespace App\Enums\Examples\V3\Ui;

class Breadcrumbs
{
    public const string BASIC = <<<'HTML'
    <x-breadcrumbs :items="[
        ['label' => 'Home', 'link' => '/'],
        ['label' => 'Users', 'link' => '/users'],
        ['label' => 'John Doe'],
    ]" />
    HTML;

    public const string NAMED_ROUTES = <<<'HTML'
    <x-breadcrumbs :items="[
        ['label' => 'Home', 'link' => 'home'],
        ['label' => 'Users', 'link' => 'users.index'],
        ['label' => 'John Doe'],
    ]" />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-breadcrumbs :items="[
        ['label' => 'Home', 'link' => '/', 'icon' => 'home'],
        ['label' => 'Settings', 'link' => '/settings', 'icon' => 'cog-6-tooth'],
        ['label' => 'Profile'],
    ]" />
    HTML;

    public const string TOOLTIPS = <<<'HTML'
    <x-breadcrumbs :items="[
        ['label' => 'Home', 'link' => '/', 'tooltip' => 'Back to homepage'],
        ['label' => 'Users', 'link' => '/users', 'tooltip' => 'View all users'],
        ['label' => 'John Doe'],
    ]" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-breadcrumbs xs :items="$items" />
    <x-breadcrumbs sm :items="$items" />
    <x-breadcrumbs :items="$items" /> {{-- md (default) --}}
    <x-breadcrumbs lg :items="$items" />
    HTML;

    public const string SEPARATOR_TEXT = <<<'HTML'
    <x-breadcrumbs separator="»" :items="$items" />
    <x-breadcrumbs separator=">" :items="$items" />
    <x-breadcrumbs separator="|" :items="$items" />
    HTML;

    public const string SEPARATOR_ICON = <<<'HTML'
    <x-breadcrumbs separator="icon:chevron-right" :items="$items" />
    HTML;

    public const string SEPARATOR_CLASS = <<<'HTML'
    <x-breadcrumbs separator-class="text-red-500 font-bold" :items="$items" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-breadcrumbs :items="$items">
        <x-slot:left>
            <x-icon name="home" class="w-5 h-5 mr-2 text-gray-400" />
        </x-slot:left>
        <x-slot:right>
            <span class="text-xs text-gray-400 ml-2">3 levels</span>
        </x-slot:right>
    </x-breadcrumbs>
    HTML;

    public const string PUBLISH_COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.breadcrumbs
    HTML;

    public const string REGISTRY_FILE = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use TallStackUi\Support\Breadcrumbs\BreadcrumbTrail;

    TallStackUi::breadcrumbs()
        ->for('home', fn (BreadcrumbTrail $trail) => $trail
            ->add(label: 'Home', link: '/', icon: 'home')
        )
        ->for('users.index', fn (BreadcrumbTrail $trail) => $trail
            ->parent(route: 'home')
            ->add(label: 'Users', link: 'users.index')
        )
        ->for('users.show', fn (BreadcrumbTrail $trail, User $user) => $trail
            ->parent(route: 'users.index')
            ->add(label: $user->name)
        );
    HTML;

    public const string SERVICE_PROVIDER = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;
    use Illuminate\Support\ServiceProvider;
    use TallStackUi\Support\Breadcrumbs\BreadcrumbTrail;

    class AppServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            TallStackUi::breadcrumbs()
                ->for(
                    'home',
                    fn (BreadcrumbTrail $trail) => $trail
                        ->add(label: 'Home', link: '/')
                );
        }
    }
    HTML;

    public const string CONFIG_FILES = <<<'HTML'
    // ...

    'breadcrumbs' => [
        Components\Breadcrumbs\Component::class,
        /*
        |----------------------------------------------------------------------
        | Breadcrumbs Settings
        |----------------------------------------------------------------------
        |
        | files: array of files (relative to base_path()) that register breadcrumb definitions.
        */
        [
            'files' => [
                'routes/breadcrumbs.php',
                'routes/admin-breadcrumbs.php', // [tl! add]
            ],
        ],
    ],

    // ...
    HTML;

    public const string AUTO_RESOLVE = <<<'HTML'
    <x-breadcrumbs />
    HTML;

    public const string PARENT_CHAINING = <<<'HTML'
    TallStackUi::breadcrumbs()
        ->for('home', fn (BreadcrumbTrail $trail) => $trail
            ->add(label: 'Home', link: '/')
        )
        ->for('settings.index', fn (BreadcrumbTrail $trail) => $trail
            ->parent(route: 'home')
            ->add(label: 'Settings', link: 'settings.index')
        )
        ->for('settings.profile', fn (BreadcrumbTrail $trail) => $trail
            ->parent(route: 'settings.index')
            ->add(label: 'Profile')
        );
    HTML;

    public const string ROUTE_MODEL_BINDING = <<<'HTML'
    TallStackUi::breadcrumbs()
        ->for('posts.show', fn (BreadcrumbTrail $trail, Post $post) => $trail
            ->parent(route: 'posts.index')
            ->add(label: $post->title)
        )
        ->for('posts.comments.show', fn (BreadcrumbTrail $trail, Post $post, Comment $comment) => $trail
            ->parent(route: 'posts.show')
            ->add(label: "Comment #{$comment->id}")
        );
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->breadcrumbs()
        ->block('block', 'classes');
    HTML;
}
