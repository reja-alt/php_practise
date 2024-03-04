<?php

/*scalar Type 
    int 
    bool
    string
    float
*/

/*compound types
    array
    object
    iterable
    callable
*/

/*special types
    resource
    null
*/

//type jugling
// declare(strict_types=1);  // Uncaught TypeError: sum(): Argument #1 ($x) must be of type int, float given,
// function sum(int $x, int $y) {
//     $x = 9.9;
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum(4.5,'56');

$t= (int)'9';
var_dump($t);