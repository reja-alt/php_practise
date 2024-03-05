<?php

$programming_language = ['php', 'java', 'c++'];
echo $programming_language[1]; //java
// echo $programming_language[-1]; //Warning: Undefined array key -1 as like string -index not work in array

//to check if array elements exist use isset()     
var_dump(isset($programming_language[4])); //bool(false)                                                 
var_dump(isset($programming_language[1])); //bool(true)   

$programming_language[0] = 'c';
var_dump($programming_language[0]);
echo count($programming_language); //3
$programming_language[] = 'python'; //add element to the last of array list
echo '<br>';
var_dump($programming_language);

array_push($programming_language, 'go', 'nodejs');
var_dump($programming_language); //array(6) { [0]=> string(1) "c" [1]=> string(4) "java" [2]=> string(3) "c++" [3]=> string(6) "python" [4]=> string(2) "go" [5]=> string(6) "nodejs" }

$programming_languages = [
    'php' => '8.01',
    'go' => '3.9.0',
    'python' => '9.0.8',
];

echo '<pre>';
print_r($programming_languages);

echo $programming_languages['go'];
$programming_languages['java'] = '65.6';

$language = 'dark';
$programming_languages[$language] = '1.23';
echo '<pre>';
print_r($programming_languages);

$array = [ 0 => 'foo', 1 => 'bar', 1 => 'baz'];
print_r($array); //will overwrite if same index

$array2 = [true => 'name', 1 => 'age', '1' => 'address', 1.8 => 'phone', null => 'e'];
echo $array2['']; // e for accesing null key
echo $array2[null]; // e for accesing null key
print_r($array2); //here all will be overwrite phone will be printed 

$array3 = ['a', 'b', 90 => 'c', 'd', 'foo' => 'reindex', 'o']; //if array key assigned with numeric value then the next key will be the max previous value wise incrementing
echo '<pre>';
print_r($array3); 

echo array_pop($array3); // d removes last element from an array
print_r($array3); 

echo array_shift($array3); // a removes first element from an array and array numeric got reindex but non numeric key will remain same
print_r($array3);
unset($array3['foo'], $array3[2]); //array key serial remain
print_r($array3);

$array4 = [3,4,5,6];
unset($array4[0],$array4[1],$array4[2],$array4[3]);
print_r($array4);
$array4[] = 67;
print_r($array4); //here key will start from 4 cause while unset retain previous 0,1,2,3 key from $array4

$x = 67;
var_dump((array)$x);


$name = ['a' => 'name', 'b' => null];
var_dump(array_key_exists('a', $name)); //bool(true) returns where key exists but not check null
var_dump(array_key_exists('b', $name)); //bool(true) returns where key exists but not check null

var_dump(isset($name['a'])); //bool(true) returns where key exists and also check null
var_dump(isset($name['b'])); //bool(false) returns where key exists and also check null