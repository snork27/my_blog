<?php
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 5 || mb_strlen($login) > 15) {
    echo "Недопустимая длина логина";
    exit ();
}
else if (mb_strlen($username) < 5 || mb_strlen($username) > 15) {
    echo "Недопустимая длина юзернейма";
    exit ();
}
else if (mb_strlen($password) < 5 || mb_strlen($password) > 15) {
    echo "Недопустимая длина пароля";
    exit ();
}


$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'register-bd';
$db_port = 8889;

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

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;

$mysqli->query("INSERT INTO `users` (`username`, `login`, `email`, `password`) VALUES ('$username', '$login', '$email', '$password')");

$mysqli->close();

header('Location: /reg_form.html');

?>