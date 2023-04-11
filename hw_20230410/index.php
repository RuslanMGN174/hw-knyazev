<?php
include "./php/printArray.php";
include "./php/randomArray.php";
include "./php/task1.php";
include "./php/task2.php";
include "./php/task3.php";
include "./php/task4.php";
include "./php/task5.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<div>
    <div>
        <p class="taskTitle">Задание 1.<br></p>
        Дан массив с элементами 50, 45, 40, 35, 30.
        Найдите сумму элементов этого массива.
        Запишите ее в переменную $result.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $arr = [50, 45, 40, 35, 30];
            printArray($arr);
            arrSum($arr);
            ?>
        </div>
        <div class="answer">
        </div>
    </div>
    <hr>
</div>
<div>
    <div>
        <p class="taskTitle">Задание 2.<br></p>
        Дан массив, заполненный случайными числами.
        Необходимо вывести массив, заполненный случайными числами.
        После чего вывести данный массив в противоположном порядке.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $task2arr = arrayRand(9, 20, 80);
            printArray($task2arr);
            ?>
        </div>
        <div class="answer">
            <?php printArray(reverseArray($task2arr)) ?>
        </div>
    </div>
    <hr>
</div>
<div>
    <div>
        <p class="taskTitle">Задание 3.<br></p>
        Создать массив, заполненный названиями картинок, например, 1.png.
        Необходимо случайным образом выбирать название картинки из массива и
        выводить ее на экран.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $arrayPic = ["1.png", "qweqw.png", "photo.png", "2.png"];
            printArray($arrayPic);
            echo "Случайная картинка из массива - " . getRndPic($arrayPic);
            ?>
        </div>
        <div class="answer">
        </div>
    </div>
    <hr>
</div>
<div>
    <div>
        <p class="taskTitle">Задание 4.<br></p>
        Дано N действительных случайных чисел в диапазоне от -100 до 100.
        Найти минимальное положительное число и максимальное отрицательное число.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php
            $task4arr = arrayRand(20, -100, 100);
            printArray($task4arr);
            printMinMax($task4arr);
            ?>
        </div>
        <div class="answer">
        </div>
    </div>
    <hr>
</div>
<div>
    <div>
        <p class="taskTitle">Задание 5.<br></p>
        Для группы учащихся известны годовые оценки по следующим предметам:
        математика, физика, химия, информатика.
        Найти среднюю в группе оценку по каждому из предметов.
        Суммирование оценок по каждому предмету.
        <p class="taskTitle">Решение:<br></p>
    </div>
    <div class="container">
        <div class="task">
            <?php printArray(arrayGrades()); ?>
        </div>
        <div class="answer">
            <?php printArray(arraySumAndAVG()); ?>
        </div>
    </div>
    <hr>
</div>

</body>
</html>