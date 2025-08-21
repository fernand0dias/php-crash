<?php

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = isset($_POST['submit']) && filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: extras/dashboard.php');
    }
}

?>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>