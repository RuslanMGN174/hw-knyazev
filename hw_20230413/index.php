<?php

include "./php/task8.php";
include "./php/task9.php";
include "./php/PrintArray.php";

?>


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
<div>
    <div>
        <p class="taskTitle">Задание 8.<br></p>
        Создать двумерный массив произвольной длины, содержащий строковые значения.
        Необходимо вывести все элементы массива, начинающиеся на А.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $task8arr = arrayIslands();
            printArray($task8arr);
            echo "<br>";
            getElementMatchChar("А", $task8arr);
            ?>
        </div>
        <div class="answer">
        </div>
    </div>
    <hr>
</div>
<div>
    <div>
        <p class="taskTitle">Задание 9.<br></p>
        Создать двумерный массив, состоящий из чисел.
        Необходимо вывести общее количество элементов массива
        и количество элементов массива для каждого измерения.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $task9arr = getMultiArrayRand(4, 6, 10, 99);
            printMultiArray($task9arr);
            echo "<br>";
            getAnswer($task9arr);
            ?>
        </div>
        <div class="answer">
        </div>
    </div>
    <hr>
</div>

</body>
</html>