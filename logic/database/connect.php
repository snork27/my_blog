<?php


$db_host = 'db';
$db_user = 'dev_user';
$db_password = 'devpass';
$db_db = 'dev_db';
$db_port = 3306;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

//echo 'Success: A proper connection to MySQL was made.';
//echo '<br>';
//echo 'Host information: '.$mysqli->host_info;
//echo '<br>';
//echo 'Protocol version: '.$mysqli->protocol_version;
