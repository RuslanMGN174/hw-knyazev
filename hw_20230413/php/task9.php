<?php

include "RandomArray.php";

function getAnswer($arr): void
{
    echo "Количество строк = " . sizeof($arr) . "<br>";
    echo "Количество столбцов = " . sizeof($arr[0]) . "<br>";
    echo "всего элементов = " . (sizeof($arr) * sizeof($arr[0])) . "<br>";
}