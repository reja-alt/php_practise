<?php

namespace App;

class DebtCollectionService {
    public function collectDebt(DebtCollector $collector) {
        // var_dump($collector instanceof Rocky);
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $owedAmount . 'out of $' . $collectedAmount;
    }
}