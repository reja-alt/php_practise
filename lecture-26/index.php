<?php

//error_reporting, error_log, display_errors

// var_dump(ini_get('error_reporting'));
// var_dump(E_ALL);
// ini_set('display_errors', 0);
// ini_set('error_reporting', E_ALL & ~E_WARNING);
// $array = [9];
// var_dump($array[8]);

// ini_set('max_execution_time', 3);  //Fatal error: Maximum execution time of 3 seconds exceeded 
// sleep(5);
// echo 'Welcome';
var_dump(ini_get('memory_limit')); //string(5) "1024M"

ini_set('memory_limit', '2024M');
// var_dump(ini_get('memory_limit'));
$string = 'x';
for($i = 0; $i < 50; $i++) {
    $string .= $string;
}

echo $string; //Fatal error: Allowed memory size of 1073741824 bytes exhausted (tried to allocate 1073741856 bytes)