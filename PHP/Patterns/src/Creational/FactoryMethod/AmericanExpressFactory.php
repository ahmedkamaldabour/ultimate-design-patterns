<?php

namespace DesignPatterns\Creational\FactoryMethod;

class AmericanExpressFactory extends PaymentMethodFactory
{

    public function createPaymentMethod(): PaymentMethod
    {
        return new AmericanExpress();
    }
}