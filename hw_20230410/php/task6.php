<?php

/*
 * Известна среднемесячная температура воздуха на следующих островах Карибского моря:
 * Куба, Тринидад, Ямайка, Гаити.
 * Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
 */

$islands = ["Куба", "Тринидад", "Ямайка", "Гаити"];

function monthTempInIslands($array): array
{
    $monthTemp = [];
    $months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
    foreach ($array as $island) {
        $monthTemp[$island] = tempByMonths($months);
    }
    return $monthTemp;
}

function tempByMonths($array): array
{
    $total = [];
    foreach ($array as $item) {
        $total[$item] = mt_rand(25, 40);
    }
    return $total;
}