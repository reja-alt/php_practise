<?php

$paymentStatus = 'rejectd';

switch($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;

    case 'rejectd':
    case 'declined':
        echo 'Paymnet Declined';
        break;

    case 'pending':
        echo 'Paymnet Pending';
        break;
    default:
    echo 'Unknown Payment Status';
}

// $paymentStatus1 = '1';   //for string it also worked doesn't check the data type
$paymentStatus1 = true;   //for string it also worked doesn't check the data type

switch($paymentStatus1) {
    case 1:
        echo 'Paid';
        break;

    case 2:
    case 3:
        echo 'Paymnet Declined';
        break;

    case 4:
        echo 'Paymnet Pending';
        break;
    default:
    echo 'Unknown Payment Status';
}