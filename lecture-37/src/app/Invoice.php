<?php

namespace App;

class Invoice {
    public string $id;

    public function __construct(public float $amount, public string $description, public string $creditCardNumber) {
        $this->id = uniqid('Invoice-');
    }

    public function __sleep() {
        return ['id', 'amount'];  //returns only id and amount while serialize
    }

    public function __serialize() {  //serilize method get priority than __sleep method
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNumber' => $this->creditCardNumber,
            'foo' => 'bar'
        ];
    }
}