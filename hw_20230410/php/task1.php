<?php

/*
 * Дан массив с элементами 50, 45, 40, 35, 30.
 * Найдите сумму элементов этого массива.
 * Запишите ее в переменную $result.
 */

function arrSum($arr): void
{
    $result = 0;
    foreach ($arr as $value) {
        $result += $value;
    }
    echo "Сумма элементов массива = " . $result;
}