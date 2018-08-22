<?php 
session_start();

function sendVerificationMail($hash)
{
    // Send registration confirmation link (verify.php)
    $to = $_SESSION['email'];
    $subject = 'Account Verification ( foodtruck.be )'; // fill in our website name
    $message_body = '
        Hello ' . $_SESSION['first_name'] . ',

        Thank you for signing up!

        Please click this link to activate your account:

        http://foodtruck.localhost.com/verify.php?email=' . $_SESSION['email'] . '&hash=' . $hash;

    mail($to, $subject, $message_body);
}
?>