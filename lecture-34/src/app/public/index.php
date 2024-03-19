<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
use App\Toastr;
use App\ToastrPro;

$toastr = new ToastrPro('foo');
$toastr->addSlice('bread');
$toastr->addSlice('bread');
$toastr->addSlice('bread');
$toastr->addSlice('bread');
$toastr->addSlice('bread');
$toastr->toastBagel();
// var_dump($toastr);
