<?php
require_once("database_connection.php");

$email_address = $_POST["email_address"];
$password = $_POST["password"];
$username = $_POST["username"];


$registration_query = "INSERT INTO login_data (email_address, password , username)
                        VALUES ('" . $email_address . "', '" . $password . "', '" . $username . "')";

$query_result = $connection->query($registration_query);


if ($query_result == TRUE) {
    header("Location:");
}
