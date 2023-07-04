<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <style>
        .profile-edit-body {
            background: rgb(99, 39, 120);
            padding-left: 300px;
            padding-right: 300px;
        }

        .container {
            min-height: 520px !important;

        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .col-md-8 {
            margin-left: 240px !important;
            margin-top: -370px !important;
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        .edit-icon {
            position: absolute;
            top: 275px;
            left: 430px;
            background-color: #BA68C8;
            color: #fff;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body class="profile-edit-body">
    <div class="container rounded bg-white mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <form id="imageUploadForm" enctype="multipart/form-data" method="post" action="http://localhost/Project/profile_edit_data.php">
                        <?php
                        session_start();
                        require_once("database_connection.php");

                        // Assuming you have a user ID stored in $_SESSION['user_id']
                        $_SESSION["id"] = 1;
                        $userId = $_SESSION['id'];

                        $selectQuery = "SELECT profile_picture FROM profile WHERE id = $userId";
                        $result = $connection->query($selectQuery);

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $profileImage = $row['profile_picture'];
                            echo '<img id="profileImage" class="rounded-circle mt-5" width="150px" src="' . $profileImage . '">';
                        } else {
                            echo '<img id="profileImage" class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">';
                        }
                        ?>
                        <img id="profileImage" class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <input type="file" name="profile_image" id="imageUpload" style="display: none;">
                        <label for="imageUpload" class="edit-icon">&#9998;</label>
                        <input type="submit" value="Upload" style="display: none;">
                    </form>
                    <span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span>
                </div>
            </div>
            <form method="post" action="http://localhost/Project/profile_edit_data.php">
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label for="name" class="labels">First Name</label><input type="text" name="name" class="form-control" placeholder="first name" value=""></div>
                            <div class="col-md-6"><label for="lastname" class="labels">Last Name</label><input type="text" name="lastname" class="form-control" value="" placeholder="last name"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label for="email_address" class="labels">Email Address</label><input type="text" name="email_address" class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label for="mobile_number" class="labels">Mobile Number</label><input type="text" name="mobile_number" class="form-control" placeholder="enter phone number" value=""></div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label for="country" class="labels">Country</label><input type="text" name="country" class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label for="state" class="labels">State/Region</label><input type="text" name="state" class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>