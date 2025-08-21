<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'New' . PHP_EOL . 'Name';
    fwrite($handle, $contents);
    fclose($handle);
    echo $contents;
}
