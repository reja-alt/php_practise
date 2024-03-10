<?php

declare(strict_types=1);

function sum(int|float $x, int|float $y =40) { //optional parameter must be after all required parameters
    return $x + $y;
}

echo sum(34);

function foo(int|float &$x, int|float $y): int|float {
    if($x % 2 === 0) {
        $x /= 2;
    }

    return $x * $y;
}

$a = 6.00;
$b = 7;

echo foo($a, $b);
var_dump($a, $b);

function sum1(...$numbers): int|float {
    $sum = 0;

    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
    // return array_sum($numbers);
}

echo sum1($a, $b, 67,54, 78) . '<br>';

function sum2(int|float $a, int|float $b, int|float|array ...$numbers): int|float {
    $sum = 0;

    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
    // return array_sum($numbers);
}

echo sum2($a, $b, 67,54, 78) . '<br>';

$numbers = [43,43,54,45];
echo sum2($a, $b, ...$numbers) . '<br>';

//named arguments

function foo5(int|float $x, int|float $y) {
    var_dump($x, $y);
    if($x % 2 === 0) {
        return $x /= 2;
    }

    return $x;
}

echo foo5(y: 6, x: 5) . '<br>';
// echo foo5(x: 6, x: 5); //Fatal error: Uncaught Error: Named parameter $x overwrites previous argument
// echo foo5(6, x: 5); //Fatal error: Uncaught Error: Named parameter $x overwrites previous argument'

$arr = ['y' => 23, 'x' => 65];
echo foo5(...$arr);