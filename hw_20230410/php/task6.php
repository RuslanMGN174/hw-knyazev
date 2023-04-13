<?php

/*
 * Известна среднемесячная температура воздуха на следующих островах Карибского моря:
 * Куба, Тринидад, Ямайка, Гаити.
 * Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
 */


function monthTempInIslands(): array
{
    $monthTemp = [];
    $islands = ["Куба", "Тринидад", "Ямайка", "Гаити"];
    $months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
    foreach ($months as $temp) {
        $monthTemp[$temp] = tempByMonths($islands);
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