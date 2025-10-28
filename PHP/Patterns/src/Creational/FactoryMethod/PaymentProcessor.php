<?php

namespace DesignPatterns\Creational\FactoryMethod;

use function var_dump;

class PaymentProcessor
{
    private PaymentMethodFactory $paymentMethodFactory;

    public function __construct()
    {
        $this->paymentMethodFactory = new PaymentMethodFactory();
    }

    public function processPayment(string $cardType): mixed
    {
        $paymentMethod = $this->paymentMethodFactory->createPaymentMethod($cardType);
        return ' => ' . $paymentMethod->authorize() . ' => ' . $paymentMethod->moneyTransfer();
    }
}

