<?php

require_once (__DIR__ . "/../database/connect.php");


$isSubmit = false;
$errorMsg = [];

function userAuth($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['username'] = $user['username'];

    if ($_SESSION['id']) {
        header('Location: ../index.php');
    }
}
//Reg form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if ($email === '' || $login === '' || $username === '' || $password === '') {
        $errorMsg[] = "Все поля должны быть заполнены!";
    }
    else if (mb_strlen($login) < 2) {
        $errorMsg[] = "Логин должен быть больше 2 символов!";
        }
    else if (mb_strlen($username) < 5) {
        $errorMsg[] = "Юзернейм должен быть больше 5 символов!";
    }
    else if (mb_strlen($password) < 5) {
        $errorMsg[] = "Пароль должен быть больше 5 символов!";
    }

    

    else {
        $password = md5($password."stdb1vds6531");

        $mysqli =new mysqli();
        $mysqli->query("INSERT INTO `users` (`username`, `login`, `email`, `password`) VALUES ('$username', '$login', '$email', '$password')");

        $mysqli->close();
    }
}

//Auth form

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if ($login === '' || $password === '') {
        array_push($errorMsg, "Все поля должны быть заполнены!");
    }
    else
    {
        $result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        $user = $result->fetch_assoc();
        $mysqli->close();
    }
//    else
//    {
//        array_push($errorMsg, "Не верный логин или пароль");
//    }
//    else
//    {
//        $login = '';
//    }
}
