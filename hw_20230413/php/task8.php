<?php

function arrayIslands(): array
{
    $arr = [];
    $islands = ["Куба", "Тринидад", "Ямайка", "Гаити"];
    $months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
    foreach ($months as $month) {
        $arr[$month] = [];
        foreach ($islands as $island) {
            $arr[$month][] = $island;
        }
    }
    return $arr;
}

function getElementMatchChar(string $char, $array): void
{
    foreach ($array as $key => $value) {
        if (mb_substr($key, 0, 1) == $char) {
            $str = $key;
            echo $str . "<br>";
        }
        foreach ($value as $item) {
            if (mb_substr($item, 0, 1) == $char) {
                $str = $item;
                echo $str . "<br>";
            }
        }
    }
}