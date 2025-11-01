<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\PaymentMethodFactory;

class PaymentMethodSelector
{
    private static array $factories = [
        'visa' => \DesignPatterns\Creational\FactoryMethod\VisaFactory::class,
        'mastercard' => \DesignPatterns\Creational\FactoryMethod\MasterCardFactory::class,
        'americanexpress' => \DesignPatterns\Creational\FactoryMethod\AmericanExpressFactory::class,
    ];

    // function to get all class ( type ) that implement PaymentMethod interface
    public static function getAvailablePaymentMethods(): array
    {
        return array_keys(self::$factories);
    }

    public static function getFactory(string $type): PaymentMethodFactory|null
    {
        $type = strtolower($type);
        if (array_key_exists($type, self::$factories)) {
            $factoryClass = self::$factories[$type];
            return new $factoryClass();
        }
        return null;
    }
}

