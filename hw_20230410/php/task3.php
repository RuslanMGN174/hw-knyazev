<?php

/*
 * Создать массив, заполненный названиями картинок, например, 1.png.
 * Необходимо случайным образом выбирать название картинки из массива и
 * выводить ее на экран.
 */

function getRndPic($arr): string
{
    $elNumber = rand(0, count($arr) - 1);
    return $arr[$elNumber];
}