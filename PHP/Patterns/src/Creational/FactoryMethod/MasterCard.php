<?php

namespace DesignPatterns\Creational\FactoryMethod;

class MasterCard implements PaymentMethod
{
    private string $cardNumber;
    private string $cardHolder;
    private string $expiryDate;
    private string $cvv;

    public function authorize(): string
    {
        return "Authorizing MasterCard...\n";
    }

    public function moneyTransfer(): string
    {
        return "Transferring money using MasterCard...\n";
    }

    public function calculatePaymentFees(): float
    {
        return 0.03; // 3% fee
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    public function setCardHolder(string $cardHolder): void
    {
        $this->cardHolder = $cardHolder;
    }

    public function getExpiryDate(): string
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(string $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv): void
    {
        $this->cvv = $cvv;
    }
}

