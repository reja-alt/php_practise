<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction(50);

$reflectionProperty = new ReflectionProperty($transaction::class, 'amount');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($transaction, 200);
var_dump($reflectionProperty->getValue($transaction));

$transaction->process();
