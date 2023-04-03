<?php

include "db.php";

if (isset($_POST['register_user'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $psswd = $_POST['psswd'];
    $psswd_confirm = $_POST['psswd_confirm'];

    //check if password match confirm password
    if ($psswd !== $psswd_confirm) {
        exit("<p>Password do not match</p> <br> <a href='index.php'>Go back</a>");
    }

    // Check if username exist
    $username_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($username_exist) > 0) {
        exit("<p>Username exist, try another name</p><a href='index.php'>Go back</a>");
    }

    // Check if email exist
    $email_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($email_exist) > 0) {
        exit("<p>Email exist, try another email</p><a href='index.php'>Go back</a>");
    }

    $crypt_psswd = md5($psswd); // encrypt password
    $insert_user = mysqli_query($db_connect, "INSERT INTO users(first_name, last_name, username, email, gender, psswd) VALUES('$first_name','$last_name', '$user_name', '$email', '$gender','$crypt_psswd')");
    if ($insert_user) {
        header("Location: registration.php");
    }
}

?>