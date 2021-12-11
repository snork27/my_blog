<!--Navbar-->
<?php if($_COOKIE['user'] == ' '):?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index1.php">Мой первый сайт</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 top-menu">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index1.php">Домашняя</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Обо мне
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Кто я?</a></li>
                            <li><a class="dropdown-item" href="#">Свяжись со мной!</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Залогинься
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../auth/auth_form.php">Вход</a></li>
                            <li><a class="dropdown-item" href="../../auth/reg_form.php">Регистрация</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php else:?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index1.php">Мой первый сайт</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 top-menu">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index1.php">Домашняя</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Обо мне
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Кто я?</a></li>
                            <li><a class="dropdown-item" href="#">Свяжись со мной!</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- profile icon -->
                                <i></i>
                                Привет, <strong><?=$_COOKIE['user']?></strong>
                            </a>   
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/auth/auth_form.php">Выйти</a></li>
                            </ul>                         
                    </li>
                </ul>
            </div>
        </div>
        <?php endif;?>
    </nav>
