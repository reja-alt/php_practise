<?php

//Working With Filesystem
// $dir = scandir(__DIR__);
// var_dump(is_dir($dir[2]));

// mkdir('foo');
// rmdir('foo');
// mkdir('foo/bar', recursive:true);
// rmdir('foo/bar'

if(file_exists('foo.txt')) {
    echo filesize('foo.txt'); 

    file_put_contents('foo.txt', 'welcome here');

    clearstatcache();
    echo filesize('foo.txt');
} else {
    echo 'file not found';
}