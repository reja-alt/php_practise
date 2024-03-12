<?php

include 'helper.php';
//array_chunk
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

printPrettyArray(array_chunk($array, 2, true)); //divide array into two portion, true gives the array key by default without true array index start from 0,1,2....

//array_combine
$item1 = ['a', 'b', 'c'];
$item2 = [1, 2, 3];

printPrettyArray(array_combine($item1, $item2)); //here $item1 would be array key and $item2 would be array value both array number of elements should same others give error

//array_filter
$array1 = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($array1, fn($element) => $element % 2 === 0);
$even = array_values($even);  //reindex element
printPrettyArray($even);

$array2 = [1,2,3,false,5,0,7,'',9,10];
$even1 = array_filter($array2);   //false value filtered out from array
printPrettyArray($even1);