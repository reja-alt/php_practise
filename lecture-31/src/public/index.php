<?php
declare(strict_types=1);
require_once('../PaymentGateway/Paddle/Transaction.php');
require_once('../PaymentGateway/Paddle/CustomerProfile.php');
require_once('../PaymentGateway/Notification/Email.php');
require_once('../PaymentGateway/Stripe/Transaction.php');

use PaymentGateway\Paddle;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$stripe_transaction = new StripeTransaction();
$paddle_transaction = new Paddle\Transaction();
$customer_profile = new Paddle\CustomerProfile();
var_dump($stripe_transaction, $paddle_transaction, $customer_profile);
