<?php

declare(strict_types=1);
namespace App\PaymentGateway\Paddle;

class Transaction {
    public float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function process() {
        echo 'Processing $' . $this->amount . 'process';
    }

    public function copyForm(Transaction $transaction) {
        var_dump($transaction->amount, $transaction->sendEmail());
    }

    public function sendEmail() {
        return true;
    }
}