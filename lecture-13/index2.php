<?php

//error control operator

$x = @file('foo.txt');
var_dump($x); // Warning: file(foo.txt): Failed to open stream: No such file or directory if use @ error will gone but not recomended

//Increment and decrement operator

$x = 9;
echo $x++; //post increment first returns the value then increment 9
echo $x; //10

echo ++$x; //pre increment first increment the value then returns 11
echo $x . '<br>'; //11
$y = null;
echo ++$y; //1
echo --$y; //0

$var = 'abd';
echo ++$var; //abe