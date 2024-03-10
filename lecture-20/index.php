<?php

declare(strict_types=1);
// function foo(): int {
//     return '1';
// }

// echo foo();

// function foo1(): int {
//     return null; //Fatal error: Uncaught TypeError: foo1(): Return value must be of type int, null returned
// }

// echo foo1();

// function foo2(): ?int {
//     return null; 
// }

// var_dump(foo2());

// function foo3(): void {
//     return null; 
// }

// var_dump(foo3()); //Fatal error: A void function must not return a value 

function foo4(): int|float|array {  //insted of int|float|array mixed can be used below
    return [12.9]; 
}

var_dump(foo4());

function foo5(): mixed {  //insted of int|float|array mixed can be used below
    return 12.9; 
}

var_dump(foo5());