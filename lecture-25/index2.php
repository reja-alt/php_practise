<?php

include 'helper.php';

//array_keys
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$keys = array_keys($array);
$keys1 = array_keys($array, 3);
$keys2 = array_keys($array, '2', true); //true will check data type
printPrettyArray($keys);
printPrettyArray($keys1);
printPrettyArray($keys2);

//array_map
$array_map = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$map_result = array_map(fn($number) => $number * 3, $array_map); //for single array map key remain same leke before
printPrettyArray($map_result);

$array_map1 = [1,2,3,4,5,6];
$array_map2 = [1,2,3,4,5,6];
$map_result1 = array_map(fn($number1, $number2) => $number1 * $number2, $array_map1, $array_map2); //for more than one array key become reindex, also the length should be same
printPrettyArray($map_result1);