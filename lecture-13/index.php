<?php

//arithmatic operator
$var1 = -10;
$var2 = 3;
var_dump($var1 % $var2); //int(-1) if which value will divide negative then result will be negative
$x = '10';
var_dump(+$x);  //int(10)

$y = +'10';
var_dump($y);  //int(10)

$m = 30;
$n = 5.00;
var_dump($m / $n); //float(6) if one is float then result will be float

$t = 0;
var_dump(fdiv($m, $t)); //  float(INF) if use fdiv then result will be infinity
// var_dump($m / $t); //Fatal error: Uncaught DivisionByZeroError: Division by zero and execution will be stopped 
// $m = 30;
// echo $m;

$number1 = 34.90;
$number2 = 4.20;

var_dump($number1 % $number2); //int(2) here float will count as integer to get proper result use fmode() below
var_dump(fmod($number1, $number2));  // float(1.2999999999999972)

//assignment operator
$x = ($y = 10) + 5;
echo $x , $y; // 15, 10

//comparison operator

$name = 'Zillur Rahman';
$position = strpos($name, 'R');

if($position === false) {
    echo 'Z not found';
} else {
    echo 'Z found at position' . $position;
}