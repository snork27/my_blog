<?php 
include("../func/validation_reg.php")


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../front/css/styles.css">
    <title>Мой первый сайт</title>
</head>

<body>
<!--Header-->
<?php include("../include/header.php"); ?>
<!--Registration -->
<div class="container reg-form">
    <h1>Форма регистрации</h1>
    <br>
    <br>
    <form class="reg-form" action="../logic/controllers/users.php" method="post">
        <div class="mb-3 col-12 col-md-4">
            <h3>Username</h3>
            <input type="text" class="form-control <?php  ?>"  name="username" id="username" placeholder="Введите юзернейм">
        </div>
        <div class="mb-3 col-12 col-md-4">
            <h3>Login</h3>
            <input type="text" class="form-control"  name="login" id="login" placeholder="Введите логин">
        </div>
        <div class="mb-3 col-12 col-md-4">
            <h3>Email address</h3>
            <input type="email" class="form-control" name="email"  id="email" placeholder="Введите email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else!</div>
        </div>
        <div class="mb-3 col-12 col-md-4">
            <h3>Password</h3>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
        </div>
        <button class="btn btn-success" type="submit">Зарегистрироваться</button>
        <br>
        <br>
    </form>

</div>
<!--Footer-->
<?php include("../include/footer.php"); ?>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>