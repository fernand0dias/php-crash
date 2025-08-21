<?php

for ($x = 0; $x <= 10; $x++) {
    echo $x;
}
// 012345678910

for ($x = 0; $x < 10; $x++) {
    echo $x;
}
// 0123456789

echo '<br>';

$x = 1;

while ($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x = $x + 1;
}

echo '<br>';

$x_do = 1;

do {
    echo 'Number ' . $x_do . '<br>';
    $x_do++;
} while ($x_do <= 50);

echo '<br>';

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
}

echo '<br>';

foreach ($posts as $post) {
    echo $post;
}

echo '<br>';

foreach ($posts as $index => $post) {
    echo $index . ' - ' . $post . '<br>';
}
// 0 - First Post
// 1 - Second Post
// 2 - Third Post

echo '<br>';
