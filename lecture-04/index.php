<?php
//constant rerefences https://www.php.net/manual/en/reserved.constants.php
// https://www.php.net/manual/en/language.constants.magic.php

define('STATUS_PAID', 'paid'); //WORKS AT RUN TIME
// define('STATUS_PAID', 1); //Can not redeclare constant , Warning: Constant STATUS_PAID already defined 
echo STATUS_PAID;

//To chcek if constant define

echo defined('STATUS_PAID'); //output 1

const STATUS = 'Pending';   //WORKS AS COMPILE TIME
echo STATUS;

if(true) {
    define('ENVIRONMENT', 'ACCESS');  //works inside control structure
    echo ENVIRONMENT;
    // const PAYMENT;  // Parse error: syntax error, unexpected token "const" DOES NOT WORK
}

$paid = 'PAIDED';
define('STATUS_'. $paid, $paid);
echo STATUS_PAIDED;

echo PHP_VERSION . '<br>';

echo __LINE__ . '<br>';
echo __FILE__ . '<br>';
echo __DIR__ . '<br>';
echo PHP_VERSION_ID  . '<br>';
echo E_DEPRECATED;
//variable variables

$structure = "take";

$$structure = "second var";

echo $structure, $take;
echo "$structure, {$$structure}";  //output: take, $take $$not work inside "" quote to resolve use {$$structure}