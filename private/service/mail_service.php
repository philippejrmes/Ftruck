<?php 
function sendVerificationMail($hash)
{
    // Send registration confirmation link (verify.php)
    $to = $_SESSION['email'];
    $subject = 'Account Verification ( foodtruck.be )'; // fill in our website name
    $message_body = '
        Hallo ' . $_SESSION['first_name'] . ',

        Dank je voor jouw registratie!

        Gelieve op onderstaande link te klikken om de account te activeren:

        http://foodtruck.localhost.com/verify.php?email=' . $_SESSION['email'] . '&hash=' . $hash . '.
        
        Hartelijk dank,
        
        Het foodtruck team';

    mail($to, $subject, $message_body);
}
?>