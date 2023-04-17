<?php

function getSingleArrayRand($length, $min = 0, $max = 100): array
{
    return array_map(
        function () use ($min, $max) {
            return mt_rand($min, $max);
        },
        array_pad([], $length, 0)
    );
}

function getMultiArrayRand($rows, $columns, $min = 0, $max = 100): array
{
    $arr = [];
    for ($i = 0; $i < $rows; $i++) {
        $arr[$i] = getSingleArrayRand($columns, $min, $max);
    }
    return $arr;
}