<?php

namespace App\Enums;

use App\Traits\VersionDiscovery;
use Exception;
use ReflectionClass;
use ReflectionException;
use Throwable;

enum Example: string
{
    use VersionDiscovery;

    // region Form
    case Checkbox = 'Form\\Checkbox';
    case Color = 'Form\\Color';
    case Currency = 'Form\\Currency';
    case Date = 'Form\\Date';
    case Input = 'Form\\Input';
    case Number = 'Form\\Number';
    case Password = 'Form\\Password';
    case Pin = 'Form\\Pin';
    case Radio = 'Form\\Radio';
    case Range = 'Form\\Range';
    case Select = 'Form\\Select';
    case Tag = 'Form\\Tag';
    case Textarea = 'Form\\Textarea';
    case Time = 'Form\\Time';
    case Toggle = 'Form\\Toggle';
    case Upload = 'Form\\Upload';
    // endregion

    // region Helpers
    case DarkTheme = 'Helpers\\DarkTheme';
    case DebugMode = 'Helpers\\DebugMode';
    case EnvBar = 'Helpers\\EnvBar';
    // endregion

    // region Integrations
    case Alpine = 'Alpine';
    // endregion

    // region Interactions
    case Dialog = 'Interactions\\Dialog';
    case Toast = 'Interactions\\Toast';
    // endregion

    // region Miscellaneous
    case Configuration = 'Configuration';
    case Contribution = 'Contribution';
    case Command = 'Command';
    case Installation = 'Installation';
    case StarterKit = 'StarterKit';
    case ComponentPrefix = 'ComponentPrefix';
    case SummerRelease = 'SummerRelease';
    case Translation = 'Translation';
    case Troubleshooting = 'Troubleshooting';
    case Updates = 'Updates';
    case UpgradeGuide = 'UpgradeGuide';
    case Welcome = 'Welcome';
    case WithoutLivewire = 'WithoutLivewire';
    // endregion

    // region Personalization (v1/v2)
    case ColorPersonalization = 'Personalization\\Color';
    case DeepPersonalization = 'Personalization\\Deep';
    case SoftPersonalization = 'Personalization\\Soft';
    // endregion

    // region Customization (v3)
    case ColorCustomization = 'Customization\\Color';
    case DeepCustomization = 'Customization\\Deep';
    case SoftCustomization = 'Customization\\Soft';
    // endregion

    // region UI
    case Alert = 'Ui\\Alert';
    case Avatar = 'Ui\\Avatar';
    case Badge = 'Ui\\Badge';
    case Banner = 'Ui\\Banner';
    case Boolean = 'Ui\\Boolean';
    case Breadcrumbs = 'Ui\\Breadcrumbs';
    case Button = 'Ui\\Button';
    case Card = 'Ui\\Card';
    case Carousel = 'Ui\\Carousel';
    case Clipboard = 'Ui\\Clipboard';
    case Dropdown = 'Ui\\Dropdown';
    case Error = 'Ui\\Error';
    case Environment = 'Ui\\Environment';
    case Icon = 'Ui\\Icon';
    case Layout = 'Ui\\Layout';
    case Link = 'Ui\\Link';
    case Loading = 'Ui\\Loading';
    case Kbd = 'Ui\\Kbd';
    case KeyValue = 'Ui\\KeyValue';
    case Modal = 'Ui\\Modal';
    case Progress = 'Ui\\Progress';
    case Reaction = 'Ui\\Reaction';
    case Rating = 'Ui\\Rating';
    case Signature = 'Ui\\Signature';
    case Slide = 'Ui\\Slide';
    case Stats = 'Ui\\Stats';
    case Step = 'Ui\\Step';
    case Tab = 'Ui\\Tab';
    case Table = 'Ui\\Table';
    case ThemeSwitch = 'Ui\\ThemeSwitch';
    case Tooltip = 'Ui\\Tooltip';
    // endregion

    /** @throws ReflectionException|Throwable */
    public function variables(): array
    {
        $version = strtoupper($this->current());
        $class = "App\\Enums\\Examples\\$version\\$this->value";

        throw_if(! class_exists($class), new Exception('Invalid code example'));

        $constants = (new ReflectionClass($class))->getConstants();

        $wrapper = <<<'HTML'
        // AppServiceProvider, "boot" method.

        {%model%}
        HTML;

        return [...collect($constants)
            ->mapWithKeys(function (string $value, string $key) use ($wrapper) {
                $hasApiCall = str_contains($value, 'TallStackUi::personalize()') || str_contains($value, 'TallStackUi::customize()');

                return [
                    str($key)->lower()
                        ->camel()
                        ->value() => ! str_contains($value, 'AppServiceProvider') && $hasApiCall
                    ? str_replace('{%model%}', $value, $wrapper)
                    : $value,
                ];
            })->toArray()];
    }
}
