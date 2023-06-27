<?php
session_start();
require_once("database_connection.php");

// Verify reCAPTCHA response
// $recaptchaResponse = $_POST['g-recaptcha-response'];
// $secretKey = '6Lc8xs0mAAAAAG8OAkQBjPBXwylAniOra-bX2D2c';
// $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

// $response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaResponse);
// $result = json_decode($response, true);

// if ($result['success']) {
// The reCAPTCHA response was valid, process the form submission
$email_address = $_POST["email_address"];
$password = $_POST["password"];

$login_query = "SELECT * FROM login_data WHERE email_address = '$email_address' AND password = '$password' LIMIT 1";

$result = $connection->query($login_query);

if ($result->num_rows > 0) {
    $user_data = null;
    while ($row = $result->fetch_assoc()) {
        $user_data = $row;
    }
    $_SESSION['user'] = $user_data;
    header("Location:");
} else {
    $_SESSION["error"] = 1;
    header("Location:http://127.0.0.1/Project/login.php");
}
// } else {
//     // The reCAPTCHA response was invalid, show an error message
//     $_SESSION["error"] = true;
//     header("Location: http://127.0.0.1/Project/login.php");
//     exit();
// }
