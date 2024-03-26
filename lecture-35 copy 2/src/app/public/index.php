<?php

require __DIR__ . '/../../vendor/autoload.php';
//annonumous class

// $obj = new class(1,2,3) {
//     public function __construct(public int $x, public int $y, public int $z) {

//     }
// };

// var_dump($obj);

$obj = new App\ClassA(2,4);
var_dump($obj->bar());

