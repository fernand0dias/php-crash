<?php
include './config/database.php';
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Past feedbacks</h2>

    <?php if (empty($feedbacks)): ?>
        <p>There's no feedback</p>
    <?php endif ?>

    <?php foreach ($feedbacks as $feedback): ?>
        <p>name: <?= $feedback['name'] ?></p>
        <p>feedback: <?= $feedback['feedback'] ?></p>
        <br>
    <?php endforeach; ?>
</body>

</html>