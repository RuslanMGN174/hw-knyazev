<?php

/*
 * Дан двумерный массив из 5 строк и 6 столбцов.
 * Определить для каждого четного столбца максимальный элемент.
 * Найти произведение этих элементов.
 */

function initArr(): array
{
    $arr = [];
    for ($i = 0; $i < 5; $i++) {
        $arr[$i] = [];
        for ($j = 0; $j < 6; $j++) {
            $arr[$i] += [$j => mt_rand(10, 99)];
        }
    }
    return $arr;
}

function getArrColumn(array $arr, int $column): array
{
    $columnNumber = ($column - 1) < 0 ? 0 : $column - 1;
    $arrTemp = [];
    foreach ($arr as $row) {
        foreach ($row as $columnKey => $columnValue) {
            if ($columnKey == $columnNumber) {
                $arrTemp[] = $columnValue;
            }
        }

    }
    return $arrTemp;
}

function printMultiArray($arr): void
{
    foreach ($arr as $row) {
        foreach ($row as $item) {
            echo "[$item]" . " ";
        }
        echo "<br>";
    }
}

function printAnswer($arr): void
{
    $maxValueCol2 = max(getArrColumn($arr, 2));
    $maxValueCol4 = max(getArrColumn($arr, 4));
    $maxValueCol6 = max(getArrColumn($arr, 6));
    echo "Максимальный элемент столбца 2 = " . $maxValueCol2 . "<br>";
    echo "Максимальный элемент столбца 4 = " . $maxValueCol4 . "<br>";
    echo "Максимальный элемент столбца 6 = " . $maxValueCol6 . "<br>";
    echo "Произведение этих элементов = " . ($maxValueCol2 * $maxValueCol4 * $maxValueCol6);
}