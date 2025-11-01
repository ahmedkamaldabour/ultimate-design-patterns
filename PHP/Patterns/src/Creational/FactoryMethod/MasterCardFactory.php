<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\MasterCard;
use DesignPatterns\Creational\FactoryMethod\PaymentMethod;
use DesignPatterns\Creational\FactoryMethod\PaymentMethodFactory;

class MasterCardFactory extends PaymentMethodFactory
{

    public function createPaymentMethod(): PaymentMethod
    {
        return new MasterCard();
    }
}