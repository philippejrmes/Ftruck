<?php
// includes
include_once ('private/config/Mysql.php');
include_once ('private/service/mail_service.php');
session_start();  

function register()
{
    // create encrypted password and hash
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $hash = md5(rand(0, 1000));

    // Check if user with that email already exists
    $db = new Database();
    $db->query("SELECT * FROM `user` WHERE `email`=:email");
    $db->bind(":email", $_SESSION['email']);
    $result = $db->resultset();

    // if user email exists the rows returned more than 0
    if (sizeof($result) > 0) {

        $_SESSION['accountErrorMessage'] = 'Gebruiker met dit email adres al gevonden.';
    }
    else
        {
        // Add user to database
        $db->query("INSERT INTO `user` (first_name, last_name, email, password, hash) "
            . "VALUES (:first_name,:last_name,:email,:password,:hash)");
        $db->bind(":first_name", $_POST['firstname'], PDO::PARAM_STR);
        $db->bind(":last_name", $_POST['lastname'], PDO::PARAM_STR);
        $db->bind(":email", $_POST['email'], PDO::PARAM_STR);
        $db->bind(":password", $password, PDO::PARAM_STR);
        $db->bind(":hash", $hash, PDO::PARAM_STR);
        $db->execute();

        if ($db->lastInsertId() > 0) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['first_name'] = $_POST['firstname'];
            $_SESSION['last_name'] = $_POST['lastname'];
            $_SESSION['active'] = 0;
            $_SESSION['logged_in'] = true;
            $_SESSION['message'] = "Confirmation link has been sent to " . $_SESSION['email'] . ", please verify
                 your account by clicking on the link in the message!";

            sendVerificationMail($hash);

            header("location: profile/");
            exit;
        }

        else {
            $_SESSION['accountErrorMessage'] = 'Registration failed!';
        }
    }
}

function login()
{
    $db = new Database();
    $db->query("SELECT * FROM `user` WHERE `email`=:email");
    $db->bind(":email", $_POST['email']);
    $result = $db->resultset();

    if (sizeof($result) > 0)
    {
        $user = $result[0];

        if (password_verify($_POST['password'], $user['password']))
        {
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['active'] = $user['active'];
            $_SESSION['logged_in'] = true;

            header("location: profile/");
            exit;
        }
    }

    $_SESSION['accountErrorMessage'] = "Inloggen met deze combinatie email en paswoord is niet mogelijk";
}
