<?php
declare(strict_types=1);
require_once('../Transaction.php');
require_once('../Customer.php');
require_once('../PaymentProfile.php');
$amount = new Transaction(100, 'Transactin 1');

echo $transaction->customer->paymentProfile->id;