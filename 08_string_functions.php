<?php

$string = 'Hello World';

// get the length of a string
echo strlen($string);

echo '<br>';

// find the position of the first o
echo strpos($string, 'o');

echo '<br>';

// find the position of the last o
echo strrpos($string, 'o');

echo '<br>';

// reverse a string
echo strrev($string);

echo '<br>';

// convert all letters to lowercase
echo strtolower($string);

echo '<br>';

// convert all letters to uppercase
echo strtoupper($string);

echo '<br>';

// uppercase the first character of each word
echo ucwords($string);

echo '<br>';

// string replace
echo str_replace('World', 'Everyone', $string);

echo '<br>';

// return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

echo '<br>';


// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float