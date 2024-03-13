<?php

declare(strict_types=1);
class Transaction {
    private float $amount; //if we not define type then var_dump($transaction->amount); value would null but if define if hint float and try to access var_dump($transaction->amount); then
                            //error occured Fatal error: Uncaught Error: Typed property Transaction::$amount must not be accessed before initialization
    private string $description;

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    } 

    public function addTax(float $rate): Transaction {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }
    public function applyDiscount(float $rate): Transaction {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }
    public function getAmount(): float {
        return $this->amount;
    }

    public function __destruct() {
        echo 'Destruct' . $this->description . '<br>';
    }
}