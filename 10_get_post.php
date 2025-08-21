<?php

if (isset($_POST['submit'])) {
    echo $_GET['name'];
    echo $_GET['age'];
}


?>

<a href="<?= $_SERVER['PHP_SELF']; ?>?name=Fernando&age=30">
    Click
</a>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
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
<p>The name is: <?= $_GET['name'] ?> and the age is: <?= $_GET['age'] ?> </p>