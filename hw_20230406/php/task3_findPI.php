<?php

$numerator = 1;
$denominator = 1;
$sum = 0;
$iterCount = 0;
$Pi = 0;

while (number_format($Pi, 2) != 3.14) {
    $iterCount++;
    if ($iterCount > 0 && $iterCount % 2 == 0) {
        $sum += 0 - ($numerator / $denominator);
    } else {
        $sum += $numerator / $denominator;
    }
    $Pi = 4 * $sum;
    $denominator += 2;
}

echo "Количество слагаемых - " . $iterCount . "<br>";
echo "Число ПИ (без округления) = " . $Pi . "<br>";
echo "Число ПИ (округление до сотых) = " . number_format($Pi, 2) . "\n";