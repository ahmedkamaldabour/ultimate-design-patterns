<?php

namespace DesignPatterns\Creational\FactoryMethod;

class PaymentMethodFactory
{
    public function createPaymentMethod(string $cardType): PaymentMethod
    {
        return match (strtoupper($cardType)) {
            'VISA' => new Visa(),
            'MASTER_CARD' => new MasterCard(),
            'AMERICAN_EXPRESS' => new AmericanExpress(),
            default => throw new \InvalidArgumentException("Unknown card type: {$cardType}")
        };
    }
}

