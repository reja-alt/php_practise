<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

// $collect = new App\CollectionAgency();
// echo $collect->collect(100);

$service = new App\DebtCollectionService();
echo $service->collectDebt(new App\Rocky);
