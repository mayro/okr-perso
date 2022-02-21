<?php
include('config.php.php');

$client->revokeToken($token);

session_destroy();

//redirect page to index.php
header('location:index.php');
