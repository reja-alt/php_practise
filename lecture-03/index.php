<?php
//if 100 % php then don't need  closing tag, and if have closing tag then don't need ; at last line

echo 'welcome';

//print return value echo doesn't

echo print 'hello world'; // output : hello world1 here returns 1

//echo can be used as multiple but print once

echo 'reja', 'khan'; // reja khan
// print 'zillur', 'rahman'; //syntax error

// echo 'zillur's invoice'; //Parse error: syntax error, unexpected identifier "s", expecting "," or ";"
//to escape these error use like below
echo 'zillur\'s invoice';
echo "zillur's invoice";

//variable declaring rules 
/*  1.Must start with letter or underscore
    2.can not start with number or special characters
    3.can not use special characters at anywhere in declaring variable names
    4.reserve keyword can not use
    5.variables are default assigned by value
*/ 

$_name = 'reja';
echo $_name;

$x = 5;

$y = $x;

$x = 9;
echo $y; //output: 5
$y = &$x;

$x = 10;
echo $y; //output : 10

$first_name = "reja";
echo 'Name is $first_name'; //will not execute output: Name is $first_name
echo 'Name is {$first_name}'; //will not execute output: Name is {$first_name}
echo "Name is $first_name"; //will execute output: Name is reja
echo "Name is {$first_name}"; //can also use {$first_name} output: Name is reja


?> 