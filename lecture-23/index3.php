<?php

//arrow functions

$array = [1,2,3,4];

$array2 = array_map(fn($element) => $element * $element, $array);

print_r($array);
print_r($array2);