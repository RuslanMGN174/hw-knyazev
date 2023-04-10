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
    <p class="taskTitle">Задание 1.<br></p>
    Дана последовательность элементов от 1 до 30.
    Необходимо вывести на экран числа, кратные 2.
    Каждое число должно быть с новой строки.

    <p class="taskTitle">Решение:<br></p>
    <?php include "./php/task1.php" ?>
    <hr>
</div>
<div>
    <p class="taskTitle">Задание 2.<br></p>
    Дана последовательность элементов от 1 до 50.
    Необходимо сделать курсивом каждый элемент, кратный 3.
    Числа, одновременно кратные 3 и 5, сделать жирным.

    <p class="taskTitle">Решение:<br></p>
    <?php include "./php/task2.php" ?>
    <hr>
</div>
<div>
    <p class="taskTitle">Задание 3.<br></p>
    Число Пи вычисляется по формуле Грегори следующим образом:
    РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках,
    тем выше точность вычисления числа Пи.
    Определить минимальное количество слагаемых для вычисления Пи
    с точностью 0.01

    <p class="taskTitle">Решение:<br></p>
    <?php include "./php/task3_findPI.php" ?>
    <hr>
</div>
<div>
    <p class="taskTitle">Задание 4.<br></p>
    Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ...
    Какое минимальное количество элементов последовательности нужно сложить,
    чтобы сумма превысила заданное число S > 10?

    <p class="taskTitle">Решение:<br></p>
    <?php include "./php/task4.php" ?>
    <hr>
</div>
<div>
    <p class="taskTitle">Задание 5.<br></p>
    Дано произвольное целое положительное число K ().
    Найти сумму всех четных цифр этого числа.
    Процедуры и функции работы со строками не использовать.

    <p class="taskTitle">Решение:<br></p>
    <div class="code">
        <form action="index.php" method="get">
            <label>
                Введите положительное число <input type="number" name="task5Number">
            </label>
            <input type="submit" value="Send">
        </form>
    </div>
    <?php include "./php/task5.php";
    $value = filter_input(INPUT_GET, "task5Number");
    echo "Сумма чётных чисел введенного числа  = " . evenSum($value);
    ?>
    <hr>
    <div>
        <p class="taskTitle">Задание 6 и 7.<br></p>
        Дано произвольное целое положительное число K ().
        Вывести цифры этого числа в порядке неубывания (например, 546085 =>045568).
        Вывести цифры этого числа в порядке невозрастания (например, 546085=>865540).
        Процедуры и функции работы со строками не использовать.

        <p class="taskTitle">Решение:<br></p>
        <div class="code">
            <form action="index.php" method="get">
                <label>
                    Введите положительное число <input type="number" name="task6Number">
                </label>
                <label><input name="direction" type="radio" value="straight">По возрастанию</label>
                <label><input name="direction" type="radio" value="reverse"> По убыванию</label>
                <input type="submit" value="Send" autofocus>
            </form>
        </div>
        <?php include "./php/task6.php";
        $value = filter_input(INPUT_GET, "task6Number");
        $direction = filter_input(INPUT_GET, "direction");
        echo "Отсортированное число - " . getSorted($value, $direction);
        ?>
        <hr>
    </div>
</body>
</html>