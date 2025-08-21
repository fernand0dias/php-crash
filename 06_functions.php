<?php
$y = 12;

function registerUser()
{
    global $y;
    echo $y;
    $x = 10;
    echo 'User registered';
}

// echo $x;
registerUser();

echo '<br>';

function sum($n1 = 1, $n2 = 2)
{
    return $n1 + $n2;
}

$number = sum();
echo $number;

echo '<br>';

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5);

echo '<br>';

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(9, 9);
