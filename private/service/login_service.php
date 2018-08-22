<?php
// includes
include_once ('private/config/Mysql.php');

$db = new Database();
$db->query("SELECT * FROM `user` WHERE `email`=:email");
$db->bind(":email", $email);
$result = $db->resultset();

if (sizeof($result) == 0) { // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    // header("location: error.php");

}
else { // User exists
    $user = $result[0];

    if (password_verify($_POST['password'], $user['password'])) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        $_SESSION['logged_in'] = true;

        // header("location: profile.php");

    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        // header("location: error.php");

    }
}