<?php

namespace App;

interface DebtCollector extends SomeOtherInterface, AnotherInterface {
    public const MY_CONST = 2; //CAN NOT OVERRIDE CONSTANT INSIDE CLASS
    // public function __construct();
    public function collect(float $owedAmount): float;
}