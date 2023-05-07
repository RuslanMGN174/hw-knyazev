<?php

session_start();

require_once "connect.php";

$authStatus = "";
$authStatusPass = "";
$email = "";
$_SESSION["disabledPass"] = "disabled";
$_SESSION["color"] = "";
$_SESSION["emailValue"] = "";
$link = Connect::getLink();

if (isset($_POST["email"])) {
    $email = strtolower($_POST["email"]);

    $sql = "SELECT * FROM `users` WHERE LOWER(email = '$email')";

    $arr_db_result = mysqli_fetch_array($link->query($sql));

    if ($arr_db_result != null && $email == $arr_db_result["email"]) {
        $_SESSION["disabledPass"] = "";
        $_SESSION["color"] = "red";
        $_SESSION["emailValue"] = $email;
    } else {
        $authStatus = "Указанный пользователь не существует";
    }
}

if (isset($_POST["password"]) && isset($_POST["password2"])) {
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if ($password == $password2) {
        $password = md5($password);

        $sqlUpdate = "UPDATE `users` SET `pass`='$password' WHERE email = '$email'";
        $result = $link->query($sqlUpdate);

        header("Location: http://hw-knyazev/my-site/app/php/authorization.php");
    } else {
        $authStatusPass = "Пароли не одинаковы, повторите ввод";
    }
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
                            <h2 class="text-uppercase text-center mb-5">Восстановление пароля</h2>

                            <form action="" method="post">
                                <div class="text-center" style="color: red"><?php echo $authStatus ?></div>
                                <div class="form-outline mb-4">
                                    <input type="text"
                                           id="email"
                                           class="form-control"
                                           name="email"
                                           value="<?php echo $_SESSION["emailValue"] ?>"
                                           required/>
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                <div class="text-center" style="color: red"><?php echo $authStatusPass ?></div>
                                <div class="form-outline mb-4">
                                    <input type="password"
                                           id="password"
                                           class="form-control"
                                           name="password"
                                           required
                                        <?php echo $_SESSION["disabledPass"] ?>
                                    />
                                    <label class="form-label" for="password"
                                           style="color: <?php echo $_SESSION["color"] ?>">Введите новый пароль</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password2" class="form-control" name="password2"
                                           required <?php echo $_SESSION["disabledPass"] ?>/>
                                    <label class="form-label" for="password2"
                                           style="color: <?php echo $_SESSION["color"] ?>">Повторите новый
                                        пароль</label>
                                </div>

                                <input type="submit" class="btn btn-primary btn-block mb-4" name="submit"
                                       value="Применить">

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

