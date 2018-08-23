<?php
include_once ('private/config/debug.php');
if(!isset($_SESSION))
{
session_start();
}

echo '<!--METADATA-->
		<base href="' . BASE_URL . '">
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	    <!--CSS-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
		<link href="public/css/main.css" rel="stylesheet" type="text/css" />';

// depending on page resetting the session is required
if($_SERVER['REQUEST_URI'] != "/account/" && isset($_SESSION['accountErrorMessage'])) {
	unset($_SESSION['accountErrorMessage']);
} 
