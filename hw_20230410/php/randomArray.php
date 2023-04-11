<?php

function arrayRand($length, $min = 0, $max = 100): array
{
    return array_map(
        function () use ($min, $max) {
            return rand($min, $max);
        },
        array_pad([], $length, 0)
    );
}