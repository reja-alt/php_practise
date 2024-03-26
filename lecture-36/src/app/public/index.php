<?php

require __DIR__ . '/../../vendor/autoload.php';
use App\Invoice;

$invoice = new Invoice(25, 'Invoice 1', '2322434');
$invoice3 = serialize($invoice);
var_dump($invoice3);
$str = serialize($invoice);
$invoice2 = unserialize($str);
var_dump($invoice,$invoice2, $invoice === $invoice2); //here $invoice and $Invoice2 points to different object
echo serialize($invoice);

// echo serialize(true) . '<br>'; 
// echo serialize(2) . '<br>'; 
// echo serialize(5.6) . '<br>'; 
// echo serialize('Welcome here') . '<br>'; 
// echo serialize([2,3,4]) . '<br>'; 
var_dump(unserialize(serialize(['a' => 2, 'b' => 4]))) . '<br>'; 

var_dump(unserialize('O:11:"App\Invoice":1:{s:2:"id";s:21:"Invoice-6602cc66c0b16";}'));

