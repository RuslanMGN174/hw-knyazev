<?php

/*
 * Дано N действительных случайных чисел в диапазоне от -100 до 100.
 * Найти минимальное положительное число и максимальное отрицательное число.
 */

function printMinMax($arr): void
{
    $arrNeg = [];
    $arrPos = [];
    foreach ($arr as $value) {
        if ($value > 0) {
            array_push($arrPos, $value);
        } elseif ($value < 0) {
            array_push($arrNeg, $value);
        }
    }
    echo "Максимальное отрицательное число = " . max($arrNeg) . "<br>";
    echo "Минимальное положительное число = " . min($arrPos) . "<br>";
}
