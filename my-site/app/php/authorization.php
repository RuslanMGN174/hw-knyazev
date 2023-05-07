<?php

session_start();

require_once "connect.php";

$authStatus = "";
$emailValue = $_SESSION["emailValue"] ?? "";
$link = Connect::getLink();

if (isset($_POST["email"]) && isset($_POST["password"])) {

    // переводим почту в нижний регистр и шифруем пароль
    $email = strtolower($_POST["email"]);
    $pass = md5($_POST["password"]);

    // sql запрос на получение данных из БД по email
    $sql = "SELECT * FROM `users` WHERE LOWER(email = '$email')";

    // исполняем запрос и переводим результат в массив
    $arr_db_result = mysqli_fetch_array($link->query($sql));

// проверяем соответствие введенного логина и пароля с БД
    if ($email == $arr_db_result["email"] && $pass == $arr_db_result["pass"]) {
        header('Location: ' . 'sayHello.php?login=' . $arr_db_result["name"]);
    } else {
        $authStatus = "Логин или пароль указаны не верно";
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
                                <span class="text-center" style="color: red"><?php echo $authStatus ?></span>
                                <div class="form-outline mb-4">
                                    <input type="text" id="email" class="form-control" name="email" required
                                           value="<?php echo $emailValue ?>"/>
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control" name="password"
                                           required/>
                                    <label class="form-label" for="password">Пароль</label>
                                </div>

                                <div class="row mb-4">

                                    <div class="col">
                                        <a href="forgotPass.php">Забыли пароль?</a>
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
