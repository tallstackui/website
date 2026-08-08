<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use TallStackUi\Facades\TallStackUi;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TallStackUi\Components\Layout\Main\Component as TsuiLayoutMain;
use TallStackUi\Components\Layout\Header\Component as TsuiLayoutHeader;
use TallStackUi\Components\Layout\SideBar\Item\Component as TsuiSideBarItem;
use TallStackUi\Components\Layout\SideBar\Main\Component as TsuiSideBarMain;
use TallStackUi\Components\Layout\SideBar\Separator\Component as TsuiSideBarSeparator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureScheme();

        $this->configureSharedVariables();

        $this->configureCustomization();

        $this->configureDemoDisk();

        $this->registerDemoLayoutAliases();
    }

    /**
     * Destination of the async upload live preview. Kept apart from every other
     * disk so `tallstackui:demo:clear` can wipe it without touching anything else.
     */
    private function configureDemoDisk(): void
    {
        config([
            'filesystems.disks.demo' => [
                'driver' => 'local',
                'root'   => storage_path('app/demo'),
                'throw'  => false,
            ],
        ]);
    }

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

    private function configureCustomization(): void
    {
        TallStackUi::customize('form.input')
            ->scope('input-rounded')
            ->block('input.wrapper')
            ->replace('rounded-md', 'rounded-full');
    }
}
