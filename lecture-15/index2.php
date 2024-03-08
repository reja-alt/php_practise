<?php

//for loop

for($i = 0; $i < 15; print $i, $i++) {
    // echo $i;
}

$text = 'welcome here';
for($i = 0; $i < strlen($text); $i++) {
    echo $text[$i] . '<br>';
}

$programming_language = ['php', 'java', 'go', 'c++'];

foreach($programming_language as &$language) {
    $language = 'php';
    // echo $language . '<br>';
}

print_r($programming_language); // Array ( [0] => php [1] => php [2] => php [3] => php )

$programming_language1 = ['php', 'java', 'go', 'c++'];
foreach($programming_language1 as &$language) {
    echo $language . '<br>';
}

$language = 'dark';
echo $language . '<br>';


$user = [
    'name' => 'reja',
    'age' => 30,
    'skills' => ['php', 'laravel', 'mysql']
];

foreach($user as $user) {
    // echo json_encode($user);
    if(is_array($user)) {
        $user = implode(',', $user);
    }
    echo $user . '<br>';
}

$user1 = [
    'name' => 'reja',
    'age' => 30,
    'skills' => ['php', 'laravel', 'mysql']
];
foreach($user1 as $value) {
    // echo json_encode($user);
    if(is_array($value)) {
        foreach($value as $item) {
            echo $item . '<br>';
        }
    } else {
        echo $value;
    }
    
}