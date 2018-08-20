<?php
// includes
include_once ('private/config/Mysql.php');

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

console_log("register_service");
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/contact/');
exit;
// Escape all $_POST variables to protect against SQL injections
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$hash = md5(rand(0, 1000));

// Check if user with that email already exists
$db = new Database();
$db->query("SELECT * FROM users WHERE email=:email");
$db->bind(":email", $email);
$result = $db->single();

// We know user email exists if the rows returned are more than 0
if ($result->num_rows > 0) {

    $_SESSION['message'] = 'User with this email already exists!';
    echo 'alert("message successfully sent")';
    // header("location: error.php");
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash) "
        . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

    // Add user to the database
    if ($mysqli->query($sql)) {

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =

            "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello ' . $first_name . ',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email=' . $email . '&hash=' . $hash;

        mail($to, $subject, $message_body);

        header("location: profile.php");

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}
?>
