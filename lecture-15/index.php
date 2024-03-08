<?php
//while
$i = 0;
while($i <= 15) {
    echo $i++ . '<br>';
} 

$j = 0;
while(true) {
    if($j >= 20) {
        break;
    }
    echo $j++ . '<br>';
}

$z = 0;
while(true) {
    while($z >= 10) {
        break 2;
    }
    echo $z++ . '<br>';
}

$m = 0;
while($m <= 20) {
    $m++;
    if($m % 2 === 0) {
        continue;
    }
    echo $m++;
}

//do -while
$r = 30;

do {
    echo $r++;    //on do while these execution occured by default based on condition
} while($r <= 29);