<?php
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

// init configuration
$clientID = '713771755235-qee13g40103rs9pv6g1a9khmo41pmikl.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://mayro.herokuapp.com/index.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->setApprovalPrompt("force");
$client->addScope("email");
$client->addScope("profile");

//start session on web page
session_start();
