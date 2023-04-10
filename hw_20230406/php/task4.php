<?php

$numerator = 1;
$denominator = 1;
$sum = 0;
$iterCount = 0;

while ($sum < 10) {
    $sum += $numerator / $denominator;
    $iterCount++;
    $numerator += 3;
    $denominator += 1;
}

echo "Количество элементов = " . $iterCount . "<br>";
echo "Сумма = " . $sum . "<br>";