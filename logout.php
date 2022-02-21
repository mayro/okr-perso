<?php
require_once 'index.php';
echo $token;
$client->revokeToken($token);


//redirect page to index.php
//header('location:index.php');
