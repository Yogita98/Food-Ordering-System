<?php

// Include config file
//require_once 'login_with_google_using_php\gpConfig.php';

// Initialize the session
session_start();
 

// Remove token and user data from the session
//unset($_SESSION['token']);
unset($_SESSION['userData']);

// Reset OAuth access token
//$gClient->revokeToken();
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>