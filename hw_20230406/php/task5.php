<?php

function evenSum($value): int
{
    $sum = 0;
    try {
        if ($value == null) return $sum;
        $arr = str_split($value, 1);
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                $sum += $arr[$i];
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        return $sum;
    }
}