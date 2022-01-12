<?php

include("../logic/database/db.php");

$errorMsg = [];

function userAuth($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['username'] = $user['username'];

    if ($_SESSION['id']) {
        header('Location: /index1.php');
    }
}
//Reg form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
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

    $password = md5($password."stdb1vds6531");

    else {
        $mysqli->query("INSERT INTO `users` (`username`, `login`, `email`, `password`) VALUES ('$username', '$login', '$email', '$password')");

        $mysqli->close();
    }
}

//Auth form

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if ($login === '' || $password === '') {
        array_push($errorMsg, "Все поля должны быть заполнены");

        else {
            $result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
            $user = $result->fetch_assoc();
            $mysqli->close();
        } 
        if ($existenceLogin && password_verify($password, $existenceLogin['password'])) {
            userAuth($existenceLogin);
        }
        else {
            array_push($errorMsg, "Не верный логин или пароль");
        }
        else {
            $login = '';
        }
    }
}