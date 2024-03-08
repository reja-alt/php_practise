<?php

//return declarw, goto

function sum($x, $y) {
    $z = $x + $y;
    return $z;  //return stop function execution not the script execution
}

$x = sum(44,56);
echo $x;

// return; //then stop the script execution
echo 'welcome';

//declare ticks
function onTick() {
    echo 'Tick' . '<br>';
}

register_tick_function('onTick');
declare(ticks=4);

$i = 0;
$length = 20;

while($i <= $length) {
    echo $i++ . '<br>';
}
//declare encoding
//declare  - strict_types 