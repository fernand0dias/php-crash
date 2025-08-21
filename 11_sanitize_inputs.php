<?php

$name = isset($_POST['submit']) ? filter_input(INPUT_COOKIE, 'name', FILTER_SANITIZE_SPECIAL_CHARS) : 'no name';
$age = isset($_POST['submit']) ? filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS) : 'no age';

echo $name;
echo '<br>';
echo $age;

?>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
<p>The name is: <?= $name ?> and the age is: <?= $age ?> </p>