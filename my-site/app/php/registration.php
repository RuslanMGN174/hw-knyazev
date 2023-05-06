<?php

session_start();

// устанавливаем соединение с БД
$link = mysqli_connect("127.0.0.1", "Knyazev_stud", "root", "fact_hw");
$email = "";

if (isset($_POST["password"])) {
    $name = $_POST["userName"];
    $email = $_POST["email"];

    // шифруем пароль
    $pass = md5($_POST["password"]);

    //сохраняем email в сессию
    $_SESSION["emailValue"] = $email;

    // запрос на добавление данных формы в БД
    $sql = "INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$name', LOWER('$email'), '$pass')";

    // исполнение запроса
    $result = $link->query($sql);

    header("Location: http://hw-knyazev/my-site/app/php/authorization.php");

}

// добавление аватарки
if ($_FILES && $_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
    $extension = mb_substr($_FILES["avatar"]["name"], -4, 4);
    $extension = $extension == "jpeg" ? ".jpeg" : $extension;

    // добавляем к имени аватарки email
    $name = "../../src/images/avatar($email)" . $extension;

    move_uploaded_file($_FILES["avatar"]["tmp_name"], $name);
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
                            <h2 class="text-uppercase text-center mb-5">Создать аккаунт</h2>

                            <form action="" enctype="multipart/form-data" method="post">

                                <div class="form-outline mb-4">
                                    <input type="text" name="userName" id="userName"
                                           class="form-control form-control-lg"
                                           required/>
                                    <label class="form-label" for="userName">Имя</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="email" id="email" class="form-control form-control-lg"
                                           required/>
                                    <label class="form-label" for="email">Электронная почта</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password"
                                           class="form-control form-control-lg"
                                           required/>
                                    <label class="form-label" for="password">Пароль</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="passRepeat" class="form-control form-control-lg"
                                           required/>
                                    <label class="form-label" for="passRepeat">Пароль (повторно)</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="avatarFile">Загрузите свой аватар</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="file" class=".form-control-file" id="avatarFile"
                                           accept="image/png,image/jpeg,image/bmp,image/gif" name="avatar">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Отправить">
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Уже есть аккаунт? <a
                                            href="authorization.php"
                                            class="fw-bold text-body"><u>Войти</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>