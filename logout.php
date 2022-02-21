<?php
include('config.php');

$client->revokeToken($token);

session_destroy();

//redirect page to index.php
header('location:index.php');
