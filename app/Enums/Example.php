<?php

namespace App\Enums;

use Exception;
use ReflectionClass;
use ReflectionException;
use Throwable;

enum Example: string
{
    case Alert = "App\\Enums\\Examples\\Alert";
    case Avatar = "App\\Enums\\Examples\\Avatar";
    case Card = "App\\Enums\\Examples\\Card";
    case Dialog = "App\\Enums\\Examples\\Dialog";
    case GetStarted = "App\\Enums\\Examples\\GetStarted";
    case Tab = "App\\Enums\\Examples\\Tab";
    case Tooltip = "App\\Enums\\Examples\\Tooltip";
    case Modal = "App\\Enums\\Examples\\Modal";

    /** @throws ReflectionException|Throwable|Exception */
    public function variables(): array
    {
        throw_if(!class_exists($this->value), new Exception("Invalid code example"));

        $reflection = new ReflectionClass($this->value);
        $constants = $reflection->getConstants();

        return [...collect($constants)
            ->mapWithKeys(function ($value, $key) {
                return [
                    str($key)->lower()
                        ->camel()
                        ->value() => trim($value)
                ];
            })->toArray()];
    }
}
