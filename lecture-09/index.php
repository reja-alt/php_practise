<?php

$firstname = "reja";
$lastname = "$firstname khan"; // reja khan

echo $lastname;

echo $lastname[0]; //r
echo $lastname[-3]; //h

$lastname[0] = 'R';
echo $lastname;

//heredoc
$x = 90;
$text = <<< TEXT
Line 1 $x
Line 2
Line 3
TEXT;

echo nl2br($text);

//nowdoc
$x = 60;
$text = <<< 'TEXT'
Line 1 $x
Line 2
Line 3
TEXT;

echo nl2br($text);  //variable would not print

$text1 = <<< TEXT
hello world
TEXT;
var_dump($text1); //string(11) "hello world"

$text1 = <<< TEXT
    hello world
TEXT;
var_dump($text1); //string(15) " hello world"