<?php

include_once "../hw_20230420/php/task2.php";
$link = $_GET["l"] ?? 1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<section>
    <div>
        <p class="taskTitle">Задание 1.<br></p>
        Отправить логины и комментарии на почту.
        Создайте форму генерации ссылки с параметром:
        Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
        При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3, где 3 – это номер
        выбранной лабораторной работы.

        <form action="index.php" method="get">
            <div>
                <label>
                    <select name="l" id="1">
                        <option value="1">Лаб1</option>
                        <option value="2">Лаб2</option>
                        <option value="3">Лаб3</option>
                        <option value="4">Лаб4</option>
                    </select>
                </label>
            </div>
            <input type="submit" name="Send" value="Отправить">
        </form>
        <div><a href="http://phpcourse.php?l=<?php echo $link ?>">lab<?php echo $link ?></a></div>

        <hr>
    </div>
    <div>
        <p class="taskTitle">Задание 2.<br></p>
        Отправить логины и комментарии на почту

        <form action="index.php" method="get">
            <div>
                <div>
                    <label>Login
                        <input type="text" name="login">
                    </label>
                </div>
                <div>
                    <label>Comments
                        <input name="comment" id="2">
                    </label>
                </div>
            </div>
            <input type="submit" name="Send" value="Отправить почту">
        </form>
        <?php
        if (isset($_GET["Send"])) {
            sendMail();
            printMsg();
        }
        ?>
        <hr>
    </div>
</section>
</body>
</html>
