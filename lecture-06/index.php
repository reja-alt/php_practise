<?php

$is_complete = [];

//integers 0,-0 = false
//floats 0.0, -0.0
// '' = false;
// '0' = false;
// [] = false
// null = false

if($is_complete) {
    echo 'success';
} else {
    echo 'fail';
}