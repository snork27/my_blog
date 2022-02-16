<?php
require_once 'logic/database/User.php';

$user = new User();
$user->getOne(1);

echo $user->name;
echo $user->login;
echo $user->id;

