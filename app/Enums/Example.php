<?php

namespace App\Enums;

use App\Enums\Examples\Alert;
use App\Enums\Examples\Avatar;
use App\Enums\Examples\Badge;
use App\Enums\Examples\Card;
use App\Enums\Examples\Dialog;
use App\Enums\Examples\Error;
use App\Enums\Examples\GetStarted;
use App\Enums\Examples\Icon;
use App\Enums\Examples\Modal;
use App\Enums\Examples\Tab;
use App\Enums\Examples\Tooltip;
use Exception;
use ReflectionClass;

enum Example: string
{
    case Alert = Alert::class;
    case Avatar = Avatar::class;
    case Badge = Badge::class;
    case Card = Card::class;
    case Dialog = Dialog::class;
    case Error = Error::class;
    case Icon = Icon::class;
    case GetStarted = GetStarted::class;
    case Tab = Tab::class;
    case Tooltip = Tooltip::class;
    case Modal = Modal::class;

    public function variables(): array
    {
        throw_if(! class_exists($this->value), new Exception('Invalid code example'));

        $constants = (new ReflectionClass($this->value))->getConstants();

        return [...collect($constants)
            ->mapWithKeys(function ($value, $key) {
                return [
                    str($key)->lower()
                        ->camel()
                        ->value() => trim($value),
                ];
            })->toArray()];
    }
}
