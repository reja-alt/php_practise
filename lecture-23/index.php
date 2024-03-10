<?php

function sum(...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)) {
    echo $x(34,45,65,76);
} else {
    echo 'Function not found';
}
