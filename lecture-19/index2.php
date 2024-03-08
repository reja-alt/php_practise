<?php

ob_start();
include './partials/nav.php';
$val = ob_get_clean();
$val = str_replace('Home', 'Our Home', $val);
echo $val;