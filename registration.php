<?php
require_once("header.php");
session_start();

?>


<body class="login_body">
    <div class="wrapper" style="height: 520px;">

        <div class="form-box login">
            <h2>login</h2>
            <?php if (isset($_SESSION["error"])) : ?>
                <?php unset($_SESSION["error"]) ?>
                <p class="error">Email address or Password incorrect!</p>
            <?php endif; ?>
            <form method="post" action="http://127.0.0.1/Project/registration_data.php">
                <div class="input-box">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email_address" required>
                    <label for="email_address">Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label for="password">password</label>
                </div>
                <div class="remember-forgot">
                    <label for="remember-me"><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" required>Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="http://127.0.0.1/Project/login.php" class="login-link">Login</a></p>
                </div>
                <!-- <div class="g-recaptcha" data-sitekey="6Lc8xs0mAAAAAP8XyqfTyw2z8cePq80bgu9zL9-F"></div> -->


            </form>
        </div>
    </div>
</body>

</html>