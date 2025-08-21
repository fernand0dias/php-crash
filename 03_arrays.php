<?php

$numbers = [1, 2, 3];
$fruits = array('apple', 'orange');

print_r($fruits);

echo '<br />';

var_dump($fruits);

echo '<br />';

echo $fruits[1];

echo '<br />';

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[6];

echo '<br />';

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['blue'];

echo '<br />';

$people = [
    [
        'first_name' => 'Fernando',
        'last_name' => 'Dias',
        'email' => 'fernando@gmail.com'
    ],
    [
        'first_name' => 'Nando',
        'last_name' => 'Diaz',
        'email' => 'nando@gmail.com'
    ]
];

echo $people[1]['email'];
echo '<br />';
var_dump(json_encode($people));
