<?php

function printArray($array): void
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function printMultiArray($arr): void
{
    foreach ($arr as $row) {
        foreach ($row as $item) {
            echo "[$item]" . " ";
        }
        echo "<br>";
    }
}