<?php
require_once("header.php");
require_once("database_connection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Generate a unique token
    $token = bin2hex(random_bytes(32));

    // Store the token, email, and timestamp in the database
    $email_address = $_POST["email_address"];
    $timestamp = time(); // Current timestamp

    // Prepare the insert query
    $insertQuery = "INSERT INTO password_reset_requests (email_address, token, timestamp) 
                    VALUES ('$email_address', '$token', '$timestamp')";

    // Execute the insert query
    if ($connection->query($insertQuery)) {
        // Compose the password reset link with the token
        $resetLink = "http://127.0.0.1/Project/reset_password.php?token=" . $token;

        // Send the password reset email
        $to = $email_address;
        $subject = "Password Reset";
        $message = "Click the following link to reset your password: $resetLink";
        $headers = "From: muhammadimrann80055@gmil.com";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Password reset email sent successfully.";
        } else {
            echo "Failed to send the password reset email.";
            echo "Error: " . error_get_last()['message'];
        }
    } else {
        echo "Error: Failed to store the password reset request in the database.";
    }


    // Redirect the user to a confirmation page
    header("Location: http://127.0.0.1/Project/password_reset_confirmation.php");
    exit();
}
?>

<body class="login_body">
    <div class="wrapper">
        <div class="form-box login">
            <h2>Forgot Password</h2>
            <form method="post" action="forgot_password.php">
                <div class="input-box">
                    <input type="email" name="email_address" required>
                    <label for="email_address">Email</label>
                </div>
                <button type="submit" class="btn" required>Reset Password</button>
            </form>
        </div>
    </div>
</body>