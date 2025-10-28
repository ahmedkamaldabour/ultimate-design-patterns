<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface PaymentMethod
{
    public function authorize(): mixed;
    public function moneyTransfer(): mixed;
    public function calculatePaymentFees(): float;
    public function getCardNumber(): string;
    public function setCardNumber(string $cardNumber): void;
    public function getCardHolder(): string;
    public function setCardHolder(string $cardHolder): void;
    public function getExpiryDate(): string;
    public function setExpiryDate(string $expiryDate): void;
    public function getCvv(): string;
    public function setCvv(string $cvv): void;
}