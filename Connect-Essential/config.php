<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('78497399806-uspcj8h0sspr3l93k7c19thqorjncfaq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('IdV0oYlUzXD5eG9BcOvFSyjJ');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:84/mazdorjee/user_login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 