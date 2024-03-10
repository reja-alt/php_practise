<?php

//date time
$current_time = time();
echo $current_time . '<br>';
echo $current_time + 5 * 24 * 60 * 60 . '<br>';
echo $current_time - 24 * 60 * 60 . '<br>';

echo date('d/m/Y g:ia'). '<br>';
echo date('d/m/Y g:ia', $current_time + 5 * 24 * 60 * 60) . '<br>';
echo date('d/m/Y g:ia', $current_time - 24 * 60 * 60) . '<br>';
echo date_default_timezone_get() . '<br>';

date_default_timezone_set('UTC');
echo date('d/m/Y g:ia'). '<br>';
echo date('d/m/Y g:ia', $current_time + 5 * 24 * 60 * 60) . '<br>';
echo date('d/m/Y g:ia', $current_time - 24 * 60 * 60) . '<br>';
echo date_default_timezone_get() . '<br>';

echo date('d/m/Y g:ia', mktime(0,0,0,10,02,null)) . '<br>';
echo date('d/m/Y g:ia', strtotime('27-01-2024 07:00:00')). '<br>';
echo date('d/m/Y g:ia', strtotime('tomorrow')). '<br>';
echo date('d/m/Y g:ia', strtotime('last day of February')). '<br>';
echo date('d/m/Y g:ia', strtotime('last day of February 2022')). '<br>';
$date = date('d/m/Y g:ia', strtotime('last day of February 2020')). '<br>';

echo '<pre>';
print_r(date_parse($date));