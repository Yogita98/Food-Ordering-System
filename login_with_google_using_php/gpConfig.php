<?php
if(!session_id()){
    session_start();
}

// Include Google API client library
//require_once '/path/to/your-project/vendor/autoload.php';
require_once 'C:\xampp\htdocs\WT_MiniProject\login_with_google_using_php\vendor\autoload.php';
require_once 'C:\xampp\htdocs\WT_MiniProject\login_with_google_using_php\google-api-php-client\src\Google\Client.php';
require_once 'C:\xampp\htdocs\WT_MiniProject\login_with_google_using_php\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Oauth2.php';

/*
 * Configuration and setup Google API
 */

$clientId = '1013225844333-klvu26n8bgodi6paavdbabi6n1f0cdo1.apps.googleusercontent.com'; 
$clientSecret = 'PKCfFiPs4CtyP3_eCXmFadln'; 
$redirectURL = 'http://localhost/WT_MiniProject/login_with_google_using_php/index.php'; //Callback URLhttp://localhost/google_sign/hi.html
// Call Google API
$gClient = new Google_Client();
//$client->setAuthConfig('client_secret.json');
$gClient->setApplicationName('Login to Foodaholic');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Service_Oauth2($gClient);
$gClient->addScope('https://mail.google.com/');

$gClient->addScope('https://www.googleapis.com/auth/userinfo.email');
//$client->setAccessType('offline');        // offline access
//$client->setIncludeGrantedScopes(1);   // incremental auth



?>