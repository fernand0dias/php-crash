<?php
$fruits = ['apple', 'orange', 'pear'];

echo count($fruits);

echo '<br>';

var_dump(in_array('apple', $fruits));

echo '<br>';

$fruits[] = 'grape';

print_r($fruits);
// Array ( [0] => apple [1] => orange [2] => pear [3] => grape )

array_push($fruits, 'blueberry');
print_r($fruits);
// Array ( [0] => apple [1] => orange [2] => pear [3] => grape [4] => blueberry )

echo '<br>';

// array_unshift($fruits);
array_pop($fruits);
print_r($fruits);

echo '<br>';

unset($fruits[2]);
print_r($fruits);

echo '<br>';

$fruits = ['apple', 'orange', 'pear', 'grape', 'blueberry'];
print_r($fruits);

echo '<br>';

$arr1 = [1, 2];
$arr2 = [3, 4];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);

echo '<br>';

$a = ['name', 'age'];
$b = ['Nando', '25'];

$c = array_combine($a, $b);
var_dump($c);

// $keys = array_keys($c);
// print_r($keys);

echo '<br>';

$numbers = range(1, 20);

print_r($numbers);

echo '<br>';

$newNumbers = array_map(function ($number) {
    return "Number: $number";
}, $numbers);

var_dump($newNumbers);

echo '<br>';

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);

echo '<br>';

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);
