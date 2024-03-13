<?php
declare(strict_types=1);
require_once('../Transaction.php');
$amount = (new Transaction(100, 'Transactin 1'))
                ->addTax(8)
                ->applyDiscount(10)
                ->getAmount();
// $transaction2 = (new Transaction(200, 'Transactin 2'))
//                 ->addTax(12)
//                 ->applyDiscount(20);
// $transaction->amount = 90;
// var_dump($transaction1->getAmount(), $transaction2->getAmount());
var_dump($amount);

$str = '{"a": 1, "b": 2, "c": 3}';
// $arr = json_decode($str, true);
$arr = json_decode($str);
var_dump($arr);
var_dump($arr->b);

$class = new \stdClass();
$class->a = 90;
$class->b = 60;
var_dump($class);

$array = [1,2,3];
$val = (object) $array;
var_dump($val->{1});

$array_int = (object) 1;
$array_int2 = (object) true;
var_dump($array_int);
var_dump($array_int2);
var_dump($array_int->scalar);
var_dump($array_int2->scalar);