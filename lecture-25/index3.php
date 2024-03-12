<?php

include 'helper.php';

//array_merge
$array1 = ['a' => 4,'b' => 5, 'c' => 6];
$array2 = [4 => 4, 5 => 5, 6 => 6];
$array3 = ['a' => 1, 'b' => 2,'c' => 3];

printPrettyArray(array_merge($array1, $array2, $array3)); //will show all if same value appears,numeric index are rearranged but non nummeric will show and overwrite key value

//array reduce

$items = [
    ['price' => 23.34, 'qty' => 8, 'description' => 'Item1'],
    ['price' => 78.00, 'qty' => 3, 'description' => 'Item2'],
    ['price' => 69.90, 'qty' => 5, 'description' => 'Item3'],
    ['price' => 34.89, 'qty' => 7, 'description' => 'Item4'],
    ['price' => 100.00, 'qty' => 2, 'description' => 'Item5'],
];

$total = array_reduce($items, fn($sum, $item) => $sum + $item['price'] * $item['qty'], 500);
echo $total;