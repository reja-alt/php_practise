<?php

namespace App;

class CollectionAgency implements DebtCollector, AnotherInterface {
    // public function __construct() {

    // }

    public function collect(float $owedAmount): float {
        $gurantee = $owedAmount * 0.5;
        return mt_rand($gurantee, $owedAmount);
    }

    // public function foo() {

    // }
}