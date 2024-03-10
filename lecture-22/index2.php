<?php

function getValue() {
    static $value = null; //if use static print Processing one time others by removing static print 3 times

    if($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);
    echo 'Processing';
    return 10;
}

echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';