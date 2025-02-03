<?php

namespace App\Enums;

use App\Traits\VersionDiscovery;
use Exception;
use ReflectionClass;

enum Example: string
{
    use VersionDiscovery;

    case Alpine = 'Others\\Alpine';
    case Alert = 'Ui\\Alert';
    case Avatar = 'Ui\\Avatar';
    case Badge = 'Ui\\Badge';
    case Banner = 'Ui\\Banner';
    case Boolean = 'Ui\\Boolean';
    case Button = 'Ui\\Button';
    case Card = 'Ui\\Card';
    case Checkbox = 'Form\\Checkbox';
    case Clipboard = 'Ui\\Clipboard';
    case Color = 'Form\\Color';
    case ColorPersonalization = 'Personalization\\ColorPersonalization';
    case Configuration = 'Others\\Configuration';
    case Contribution = 'Others\\Contribution';
    case Command = 'Others\\Command';
    case Date = 'Form\\Date';
    case DarkTheme = 'Others\\DarkTheme';
    case DebugMode = 'Others\\DebugMode';
    case DeepPersonalization = 'Personalization\\DeepPersonalization';
    case Dialog = 'Ui\\Dialog';
    case Dropdown = 'Ui\\Dropdown';
    case Error = 'Ui\\Error';
    case Icon = 'Ui\\Icon';
    case Input = 'Form\\Input';
    case Installation = 'Others\\Installation';
    case ComponentPrefix = 'Others\\ComponentPrefix';
    case Link = 'Ui\\Link';
    case Loading = 'Ui\\Loading';
    case Modal = 'Ui\\Modal';
    case Number = 'Form\\Number';
    case Password = 'Form\\Password';
    case Pin = 'Form\\Pin';
    case Radio = 'Form\\Radio';
    case Range = 'Form\\Range';
    case Progress = 'Ui\\Progress';
    case Reaction = 'Ui\\Reaction';
    case Rating = 'Ui\\Rating';
    case Select = 'Form\\Select';
    case Slide = 'Ui\\Slide';
    case Stats = 'Ui\\Stats';
    case Step = 'Ui\\Step';
    case SoftPersonalization = 'Personalization\\SoftPersonalization';
    case SummerRelease = 'Others\\SummerRelease';
    case Tab = 'Ui\\Tab';
    case Table = 'Ui\\Table';
    case Tag = 'Form\\Tag';
    case Textarea = 'Form\\Textarea';
    case ThemeSwitch = 'Ui\\ThemeSwitch';
    case Time = 'Form\\Time';
    case Toast = 'Ui\\Toast';
    case Toggle = 'Form\\Toggle';
    case Tooltip = 'Ui\\Tooltip';
    case Translation = 'Others\\Translation';
    case Troubleshooting = 'Others\\Troubleshooting';
    case Updates = 'Others\\Updates';
    case Upload = 'Form\\Upload';
    case UpgradeGuide = 'Others\\UpgradeGuide';
    case Welcome = 'Others\\Welcome';
    case WithoutLivewire = 'Form\\WithoutLivewire';

    public function variables(): array
    {
        $version = strtoupper($this->current());
        $class = "App\\Enums\\Examples\\$version\\$this->value";

        throw_if(! class_exists($class), new Exception('Invalid code example'));

        $constants = (new ReflectionClass($class))->getConstants();

        return [...collect($constants)
            ->mapWithKeys(function (string $value, string $key) {
                return [
                    str($key)->lower()
                        ->camel()
                        ->value() => trim($value),
                ];
            })->toArray()];
    }
}
