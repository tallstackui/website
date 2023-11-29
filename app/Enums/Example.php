<?php

namespace App\Enums;

use App\Enums\Examples\Configuration;
use App\Enums\Examples\Contribution;
use App\Enums\Examples\DarkTheme;
use App\Enums\Examples\Form\Checkbox;
use App\Enums\Examples\Form\Input;
use App\Enums\Examples\Form\Password;
use App\Enums\Examples\Form\Radio;
use App\Enums\Examples\Form\Textarea;
use App\Enums\Examples\Form\Toggle;
use App\Enums\Examples\Installation;
use App\Enums\Examples\Personalization\ColorPersonalization;
use App\Enums\Examples\Personalization\DeepPersonalization;
use App\Enums\Examples\Personalization\SoftPersonalization;
use App\Enums\Examples\Translation;
use App\Enums\Examples\Ui\Alert;
use App\Enums\Examples\Ui\Avatar;
use App\Enums\Examples\Ui\Badge;
use App\Enums\Examples\Ui\Button;
use App\Enums\Examples\Ui\Card;
use App\Enums\Examples\Ui\Dialog;
use App\Enums\Examples\Ui\Dropdown;
use App\Enums\Examples\Ui\Error;
use App\Enums\Examples\Ui\Icon;
use App\Enums\Examples\Ui\Modal;
use App\Enums\Examples\Ui\Select;
use App\Enums\Examples\Ui\Slide;
use App\Enums\Examples\Ui\Tab;
use App\Enums\Examples\Ui\Toast;
use App\Enums\Examples\Ui\Tooltip;
use App\Enums\Examples\Welcome;
use Exception;
use ReflectionClass;

enum Example: string
{
    case Alert = Alert::class;
    case Avatar = Avatar::class;
    case Badge = Badge::class;
    case Button = Button::class;
    case Card = Card::class;
    case Configuration = Configuration::class;
    case ColorPersonalization = ColorPersonalization::class;
    case Contribution = Contribution::class;
    case Checkbox = Checkbox::class;
    case DeepPersonalization = DeepPersonalization::class;
    case Dialog = Dialog::class;
    case Dropdown = Dropdown::class;
    case DarkTheme = DarkTheme::class;
    case Error = Error::class;
    case Icon = Icon::class;
    case Input = Input::class;
    case Installation = Installation::class;
    case Password = Password::class;
    case Radio = Radio::class;
    case Select = Select::class;
    case Slide = Slide::class;
    case SoftPersonalization = SoftPersonalization::class;
    case Tab = Tab::class;
    case Textarea = Textarea::class;
    case Translation = Translation::class;
    case Toast = Toast::class;
    case Toggle = Toggle::class;
    case Tooltip = Tooltip::class;
    case Modal = Modal::class;
    case Welcome = Welcome::class;

    public function variables(): array
    {
        throw_if(! class_exists($this->value), new Exception('Invalid code example'));

        $constants = (new ReflectionClass($this->value))->getConstants();

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
