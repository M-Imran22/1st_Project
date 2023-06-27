<?php
require_once("header.php");
?>
<?php
session_start();
?>

<body class="login_body">
    <div class="wrapper">

        <div class="form-box login">
            <h2>login</h2>
            <?php if (isset($_SESSION["error"])) : ?>
                <?php unset($_SESSION["error"]) ?>
                <p class="error">Email address or Password incorrect!</p>
            <?php endif; ?>
            <form method="post" action="http://127.0.0.1/Project/login_data.php">
                <div class="input-box">
                    <input type="email" name="email_address" required>
                    <label for="email_address">Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label for="password">password</label>
                </div>
                <div class="remember-forgot">
                    <label for="remember-me"><input type="checkbox" name="remember-me">Remember me</label>
                    <a href="http://127.0.0.1/Project/forgot_password.php">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" required>Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="http://127.0.0.1/Project/registration.php" class="register-link">Register</a></p>
                </div>
                <!-- <div class="g-recaptcha" data-sitekey="6Lc8xs0mAAAAAP8XyqfTyw2z8cePq80bgu9zL9-F"></div> -->


            </form>
        </div>
    </div>
</body>

</html>