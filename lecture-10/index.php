<?php

//null constant

$x = null;
var_dump($x);  //NULL

var_dump(is_null($x)); //  bool(true)

$y = null;
var_dump($y === null); //bool(true)

var_dump($t); //Warning: Undefined variable $t in C:\xampp\htdocs\php_practise\lecture-10\index.php on line 13
                //NULL

var_dump(is_null($z));  //Warning: Undefined variable $z in C:\xampp\htdocs\php_practise\lecture-10\index.php on line 16
                        //bool(true)

$val = 456;
unset($val);
var_dump($val);    //Warning: Undefined variable $val in C:\xampp\htdocs\php_practise\lecture-10\index.php on line 21
                    //NULL
$r = null;
var_dump((string) $r); //string(0) ""
var_dump((int) $r); //int(0)
var_dump((bool) $r); // bool(false)
var_dump((array) $r); // array(0) { }