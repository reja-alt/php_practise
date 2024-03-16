<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
use App\PaymentGateway\Paddle\Transaction;
// use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

// spl_autoload_register(function($class) {
//     $path = __DIR__ . '/../../' . lcfirst(str_replace('\\', '/', $class) . '.php');
//     require $path;
// });

// $stripe_transaction = new StripeTransaction();
$paddle_transaction = new Transaction();
// $customer_profile = new Paddle\CustomerProfile();
// var_dump($stripe_transaction, $paddle_transaction, $customer_profile);
// var_dump($paddle_transaction);

// $id = new \Ramsey\Uuid\UuidFactory();
// echo $id->uuid4();

echo Transaction::STATUS_PAID;
echo $paddle_transaction::class;