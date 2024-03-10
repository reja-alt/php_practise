<?php
$x = 9;

function foo() {
    // global $x;  //here global is the reference of value

    // $x = 90;
    // return $x;
    $GLOBALS['x'] = 56;
    echo $GLOBALS['x'];
}
// echo $x . '<br>'; //9
// echo foo(). '<br>'; //90
// echo $x . '<br>'; //90

// foo();  //9
foo();  //56
echo $x; //56
