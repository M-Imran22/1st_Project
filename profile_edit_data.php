<?php
session_start();
require_once("database_connection.php");

$_name = $_POST['name'];
$_lastname = $_POST['lastname'];
$_email_address = $_POST['email_address'];
$_mobile_number = $_POST['mobile_number'];
$_country = $_POST['country'];
$_state = $_POST['state'];

// $selected_file_name = $_FILES["profile_picture"]["name"]; //my_dp.jpeg;

// $file_parts = pathinfo($selected_file_name);
// $only_file_name = $file_parts["filename"]; // my_dp
// $extension = $file_parts["extension"]; // jpeg

// $selected_file_name = $only_file_name . "_" . time() . "." . $extension; // my_dp_1236988273.jpeg
// $target_path = "myfiles/" . $selected_file_name; // my_files/my_dp_1236988273.jpeg

// move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_path);

$target_path = "./image/";

if (isset($_FILES["profile_picture"])) {
    $selected_file_name = $_FILES["profile_picture"]["name"];

    $file_parts = pathinfo($selected_file_name);
    $only_file_name = $file_parts["filename"];
    $extension = $file_parts["extension"];

    $selected_file_name = $only_file_name . "_" . time() . "." . $extension;
    $target_path = "./image/" . $selected_file_name;

    move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_path);

    // Save the profile image filename to the database
    $profile_id = $_SESSION["id"];
    $profile_image_query = "UPDATE profile SET profile_picture = '$selected_file_name' WHERE id = $profile_id";
    $query_result = $connection->query($profile_image_query);

    if ($query_result) {
        echo "Profile image uploaded successfully.";
    } else {
        echo "Failed to upload profile image.";
    }
}


$profile_edit_query = "INSERT INTO profile ( name, lastname, email_address, mobile_number, country, state, profile_picture)
                            VALUES('" . $_name . "','" . $_lastname . "','" . $_email_address . "','" . $_mobile_number . "' ,'" . $_country . "','" . $_state . "', '" . $target_path . "')";

$query_result = $connection->query($profile_edit_query);
print($profile_edit_query);

// if ($query_result == TRUE) {
//     header("location:http://127.0.0.1/Project/profile_edit.php");
// }
