<?php

$payment_status = 1;

match($payment_status) {
    1 => print 'Paid',
    2 => print 'Payment Declined',
    0 => print 'Payment Pending',
};


// $payment_status = 3;
$payment_status = 30;  //it check data type if matched or not
$value = match($payment_status) {
    1 > 2 => 'Paid',    //here logical expression also possible
    2,3 => 'Payment Declined',
    0 => 'Payment Pending',
    default => 'Unknown Payment Status'  //if not use default show error Fatal error: Uncaught UnhandledMatchError: Unhandled match case 30
};

echo $value;