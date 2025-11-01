<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\PaymentMethodFactory;

class VisaFactory extends PaymentMethodFactory
{
    public function createPaymentMethod(): \DesignPatterns\Creational\FactoryMethod\PaymentMethod
    {
        return new \DesignPatterns\Creational\FactoryMethod\Visa();
    }
}