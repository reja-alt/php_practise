<?php

//Error Handling

// trigger_error('Example Error', E_USER_ERROR); //stop the execution
// trigger_error('Example Error', E_USER_WARNING); //NOT stop the execution
// echo 1;
function errorHandler(int $type, string $msg, ? string $file, int $line) {
    echo $type . $msg . 'in' . $file . 'on' .  $line;
}

set_error_handler('errorHandler', E_ALL);

echo $x;