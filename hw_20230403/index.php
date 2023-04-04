<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<div class="container">
    <div class="code">
        <?php include "./php/task1.php"; ?>
    </div>
    <div class="code">
        <?php include "./php/task2.php"; ?>
    </div>
    <div class="code">
        <form action="index.php" method="get">
            <label>
                Введите число от 0 до 10 <input type="number" name="numberField" autofocus>
            </label>
            <input type="submit" value="Send">
        </form>
        <div>
            <?php
            include "./php/task3.php";
            $value = filter_input(INPUT_GET, "numberField");
            showString($value);
            ?>
        </div>
    </div>
</div>
</body>
</html>