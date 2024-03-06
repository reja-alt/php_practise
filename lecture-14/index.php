<?php

$score = 67;

if($score > 70) {
    echo 'A';
    if($score > 80) {
        echo '+';
    }
} elseif($score > 60) {
    echo 'B'; 
    if($score > 65) {
        echo '+';
    }
} elseif($score > 50) {
    echo 'C'; 
    if($score > 55) {
        echo '+';
    }
} elseif($score > 40) {
    echo 'D'; 
    if($score > 45) {
        echo '+';
    }
}  
else {
    echo 'F';
}