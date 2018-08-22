<?php
    // this is an intermediate page to handle email verification was clicked in the mail
    // url parameters should not be null or empty
    if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
        {

        $db->query("SELECT * FROM `user` WHERE `email`=:email AND `hash`=:hash AND `active`=0");
        $db->bind(":email", $_GET['email']);
        $db->bind(":hash", $_GET['hash']);
        $result = $db->resultset();

        if ($result->num_rows == 0)
            {
            $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        // header("location: error.php");
        }
        else {
            $_SESSION['message'] = "Your account has been activated!";

            $db->query("UPDATE `user` SET `active`=1 WHERE `email`=:email");
            $db->bind(":email", $_GET['email']);
            $updateResult = $db->execute();

            if ($updateResult->num_rows > 0) {
                $_SESSION['active'] = 1;
            }

        // header("location: success.php");
        }
    }
    else {
        $_SESSION['message'] = "Invalid parameters provided for account verification!";
        // header("location: error.php");
    }

    header("Location: index.php");
?>