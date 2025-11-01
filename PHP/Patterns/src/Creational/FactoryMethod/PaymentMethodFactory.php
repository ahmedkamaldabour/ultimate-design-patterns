<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class PaymentMethodFactory
{
    abstract public function createPaymentMethod(): PaymentMethod;

    public function process(): mixed
    {
        $paymentMethod = $this->createPaymentMethod();
        return ' => ' . $paymentMethod->authorize() . ' => ' . $paymentMethod->moneyTransfer();
    }
}

