<?php

declare(strict_types=1);
namespace App\PaymentGateway\Paddle;
use App\Notification\Email;
// const PAYMENT = 9;

// function foo() {
    
// }
class Transaction {
    public const STATUS_PAID = 'paid';
    private const STATUS_PENDING = 'pending';
    public function __construct() {
        // var_dump(new Email());
        var_dump(self::STATUS_PENDING);
    }
}