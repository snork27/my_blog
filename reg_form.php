<?php
$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password_confirm = filter_var(trim($_POST['password_confirm']),FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5||mb_strlen($login)>15){
    echo "Недопустимая длина логина";
    exit();
} 
elseif(mb_strlen($username)<5||mb_strlen($username)>15){
    echo "Недопустимая длина юзернейма";
    exit();
} 
elseif(mb_strlen($password)<5||mb_strlen($password)>15){
    echo "Недопустимая длина юзернейма";
    exit();
} 
elseif($password!=$password_confirm){
    echo "Пароль не совпадает"
    exit();
}

$mysql = new mysqli('localhost','root','root','register-bd');
$mysql->query("INSERT INTO `users` (`username`, `login`, `email`, `password`) VALUES('$username','$login','$email','$password')");

$mysql->close();
?>
