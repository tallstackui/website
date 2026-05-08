<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TallStackUi\Components\Layout\Header\Component as TsuiLayoutHeader;
use TallStackUi\Components\Layout\Main\Component as TsuiLayoutMain;
use TallStackUi\Components\Layout\SideBar\Item\Component as TsuiSideBarItem;
use TallStackUi\Components\Layout\SideBar\Main\Component as TsuiSideBarMain;
use TallStackUi\Components\Layout\SideBar\Separator\Component as TsuiSideBarSeparator;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureScheme();

        $this->configureSharedVariables();

        $this->configurePersonalization();

        $this->registerDemoLayoutAliases();
    }

    /**
     * The TallStackUI layout family is unregistered globally
     * (TALLSTACKUI_IGNORE_LAYOUT_REGISTRATION=true) to avoid clashing with this site's
     * own <x-layout>. We re-register them under <x-tsui-*> aliases so the documentation
     * iframe demos can render the real components without affecting the site itself.
     */
    private function registerDemoLayoutAliases(): void
    {
        Blade::component(TsuiLayoutMain::class, 'tsui-layout');
        Blade::component(TsuiLayoutHeader::class, 'tsui-layout.header');
        Blade::component(TsuiSideBarMain::class, 'tsui-side-bar');
        Blade::component(TsuiSideBarItem::class, 'tsui-side-bar.item');
        Blade::component(TsuiSideBarSeparator::class, 'tsui-side-bar.separator');
    }

    private function configureSharedVariables(): void
    {
        View::share('discord', 'https://discord.gg/sfr66WXh4A');

        View::share('issues', 'https://github.com/tallstackui/tallstackui/issues/new?assignees=devajmeireles&labels=bug&projects=&template=bug_report.yml&title=%5BBug%5D%3A+');
    }

    private function configureScheme(): void
    {
        URL::forceHttps($this->app->isProduction() || str_contains(config('app.url'), 'ngrok'));
    }

    private function configurePersonalization(): void
    {
        TallStackUi::customize('form.input')
            ->scope('input-rounded')
            ->block('input.wrapper')
            ->replace('rounded-md', 'rounded-full');
    }
}
