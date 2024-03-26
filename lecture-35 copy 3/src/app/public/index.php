<?php

require __DIR__ . '/../../vendor/autoload.php';
use App\Invoice;

$invoice1 = new Invoice(23, 'Invoice');
$invoice2 = new Invoice(23, 'Invoice');

$invoice3 = $invoice1;
var_dump($invoice1 == $invoice3);
var_dump($invoice1 === $invoice3); //here true because invoice 1 and invoice3 pointing same address

$invoice3->amount = 90;
var_dump($invoice1, $invoice3);
