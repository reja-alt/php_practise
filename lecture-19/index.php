<?php

//require, require_once, include, include_once
//the difference between include and require is include shows warniing but not stop script execution
//but require shows warning along with stop script execution

// include 'file.php';
// require 'file.php'; //here stop execution means not showing welcome
// echo 'welcome';  //here not stop execution means welcome would print

// require 'file.php';  //add file multipme time
// $x++;
// echo $x;  //6
// require 'file.php';
// echo $x;  //5

require_once 'file.php';  //add file only one time
$x++;
echo $x;  //6
require_once 'file.php';
echo $x;  //6