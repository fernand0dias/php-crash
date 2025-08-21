<?php include './config/database.php'; ?>

<?php
// Set vars to empty values
$name = $email = $feedback = '';
$nameErr = $emailErr = $feedbackErr = '';

// Form submit
if (isset($_POST['submit'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    // Validate feedback
    if (empty($_POST['feedback'])) {
        $feedbackErr = 'Body is required';
    } else {
        // $feedback = filter_var($_POST['feedback'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $feedback = filter_input(
            INPUT_POST,
            'feedback',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    if (empty($nameErr) && empty($emailErr) && empty($feedbackErr)) {
        // add to database
        $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
        if (mysqli_query($conn, $sql)) {
            // success
            header('Location: .');
        } else {
            // error
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<h2>Feedback</h2>
<?php echo isset($name) ? $name : ''; ?>
<p>Leave feedback for Traversy Media</p>

<form method="POST" action="<?php echo htmlspecialchars(
                                $_SERVER['PHP_SELF']
                            ); ?>">
    <div>
        <label for="name">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
                                                    'is-invalid'; ?>" id="name" name="name"
            placeholder="Enter your name" value="<?php echo $name; ?>">
        <div id="validationServerFeedback">
            Please provide a valid name.
        </div>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" class="<?php echo !$emailErr ?:
                                        'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email"
            value="<?php echo $email; ?>">
    </div>
    <div>
        <label for="feedback">Feedback</label>
        <textarea class="<?php echo !$feedbackErr ?:
                                'is-invalid'; ?>" id="feedback" name="feedback"
            placeholder="Enter your feedback"><?php echo $feedback; ?></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Send">
    </div>
</form>
<?php include 'inc/footer.php'; ?>