<?php
require_once 'index.php';

$client->revokeToken($token);


//redirect page to index.php
header('location:index.php');
