<?php

$x = 13.5e3;
var_dump($x); //float(13500)

$y = 13.5e-3;
var_dump($y); //float(0.0135)

$s = floor((0.7 + 0.1) * 10);
var_dump($s); // float(7)

$ceil = ceil((0.1 + 0.3) * 10);
var_dump($ceil); // float(4)

echo log(-1); //NAN

$m = 0.23;
$n = 1 - 0.77;
var_dump($m , $n);

//will print no
if($m == $n) {
    echo 'yes';
} else {
    echo 'no';
}

echo PHP_FLOAT_MAX * 2; //INF

$nan = PHP_FLOAT_MAX * 2;
var_dump(is_infinite($nan)); //bool(true)
var_dump(is_nan($nan));   //bool(false)

$var = 6;
var_dump((float)$var);  //float(6)

$r = 'hfjhf';
var_dump((float)$r); //float(0)

$d = '45.7hfjhf';
var_dump((float)$d); //float(45.7)