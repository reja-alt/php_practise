<?php

if(! file_exists('foo.txt')) {
    echo 'File not found';
    return;
}

$file = fopen('foo.txt', 'r');
while(($line = fgetcsv($file)) !== false) {
    print_r($line) . '<br>';
}

echo '<br>';
$content = file_get_contents('foo.txt');
echo $content;

file_put_contents('bar.txt', 'hello');
file_put_contents('bar.txt', 'world'); //overwrite hello to world
file_put_contents('bar.txt', 'world', FILE_APPEND); //add world on file

unlink('bar.txt');
// var_dump($file);