<?php

function getSorted($k, $direction): string
{
    if ($k == null || $direction == null) return "";
    $str = (string)$k;
    $arr = str_split($str, 1);
    for ($j = 0; $j < count($arr) - 1; $j++) {
        for ($i = 0; $i < count($arr) - $j - 1; $i++) {
            $arr = getArr($arr, $i, $direction);
        }
    }
    return implode("", $arr);
}

//выбор направления сортировки
function getArr(array $arr, int $i, string $direction): array
{
    switch ($direction) {
        case "straight":
            $arr = getArrStraightSort($arr, $i);
            break;
        case "reverse":
            $arr = getArrReverseSort($arr, $i);
            break;
    }
    return $arr;
}

//сортировка по убыванию
function getArrReverseSort(array $arr, int $i): array
{
    if ($arr[$i] < $arr[$i + 1]) {
        $tmp_var = $arr[$i + 1];
        $arr[$i + 1] = $arr[$i];
        $arr[$i] = $tmp_var;
    }
    return $arr;
}

//сортировка по возрастанию
function getArrStraightSort(array $arr, int $i): array
{
    if ($arr[$i] > $arr[$i + 1]) {
        $tmp_var = $arr[$i + 1];
        $arr[$i + 1] = $arr[$i];
        $arr[$i] = $tmp_var;
    }
    return $arr;
}