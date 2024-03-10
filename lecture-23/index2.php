<?php

//anonymous function is a function with no name, it also known as lamda function
//ends with semicolon

$x = 3;
$sum = function (int|float ...$numbers) use ($x): int|float { //here $x passes only by value not reference
    $x = 60;
    echo $x;
    return array_sum($numbers);
};

echo $sum(32,34,54,65) . '<br>';
echo $x;  //here not change $x value after change value of $x inside function cause it is only passed by value

$array = [1,2,3,5];

$foo = function($element) {
    return $element * 2;
};
$array2 = array_map($foo, $array);

print_r($array);
print_r($array2);