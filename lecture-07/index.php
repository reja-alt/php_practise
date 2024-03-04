<?php

$x = PHP_INT_MAX + 1;
var_dump($x);

$y = (int)false;
var_dump($y); //int(0)

$s = (int) '54gdgkj';
var_dump($s);  // 54

$t = (int) 'test';
var_dump($t); //0

$n = (int) null;
var_dump($n); //  int(0)

var_dump(is_int($n)); // bool(true)

$underscore = 3_000_90;
var_dump($underscore); // int(300090) underscore are removed by php

$string = '66_5656';
var_dump($string);  // string(7) "66_5656" when string then not remove underscore

$cast = (int) '66_5656';
var_dump($cast);  // int(66)