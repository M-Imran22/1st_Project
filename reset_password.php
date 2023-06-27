<?php
require_once("header.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $token = $_POST["token"];
    $password = $_POST["password"];

    // Validate the token and retrieve the associated email address from the database

    // Update the user's password in the database

    // Redirect the user to a password reset success page
    header("Location: http://127.0.0.1/Project/password_reset_success.php");
    exit();
}
?>

<body class="login_body">
    <div class="wrapper">
        <div class="form-box login">
            <h2>Reset Password</h2>
            <form method="post" action="reset_password.php">
                <input type="hidden" name="token" value="<?php echo $_GET["token"]; ?>">
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label for="password">New Password</label>
                </div>
                <button type="submit" class="btn" required>Reset Password</button>
            </form>
        </div>
    </div>
</body>