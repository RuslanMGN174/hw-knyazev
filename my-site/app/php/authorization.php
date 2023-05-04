<?php

session_start();

$usersArray = ["John" => md5("123"), "Bill" => md5("234")];

// проверяем соответствие введенного логина и пароля с данными в массиве
if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $pass = md5($_POST["password"]);
    if (array_key_exists($login, $usersArray) && $usersArray[$login] == $pass) {
        $_POST["password"] = $pass;
        header('Location: ' . 'sayHello.php?login=' . $login);
    } else {
        echo "<b>Логин или пароль указаны не верно</b>";
        echo "<br>";
        echo "<br>";
    }
}

// настройка реферера и куки
if (isset($_GET["act"])) {
    $url = match ($_GET["act"]) {
        "fact" => "https://academy.fact.digital/",
        "bitrix" => "https://www.bitrix24.ru/"
    };
    setcookie("lastVisitedSite", $url, time() + 3600);
    header("Location: $url");
    exit();
}

// удаляем сессию при помощи специальной функции
session_destroy();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Авторизация</h2>

                            <form action="" method="post">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example1" class="form-control" name="login"/>
                                    <label class="form-label" for="form2Example1">Логин</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example2" class="form-control" name="password"/>
                                    <label class="form-label" for="form2Example2">Пароль</label>
                                </div>

                                <div class="row mb-4">

                                    <div class="col">
                                        <a href="#!">Забыли пароль?</a>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-block mb-4" name="submit"
                                       value="Войти">

                                <div class="text-center">
                                    <p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="?act=fact">Факт Академия</a>
                                <a href="?act=bitrix">Bitrix24</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
