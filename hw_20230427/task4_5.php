<?php

$str_object_text1 = fopen("text1.txt", "r");
$str_object_text2 = fopen("text2.txt", "r");

$text1 = fread($str_object_text1, filesize("text1.txt"));
$text2 = fread($str_object_text2, filesize("text2.txt"));

fclose($str_object_text1);
fclose($str_object_text2);

$arr_text1 = explode(". ", $text1);
$arr_text2 = explode(". ", $text2);

$arrCommon = array_merge($arr_text1, $arr_text2);

// строка из массива без повторов
$textCommon = implode(". ", array_unique($arrCommon));

// запись в файл без повторов
$text3 = "text3.txt";
file_put_contents($text3, $textCommon);

// массив из повторных предложений
$arrayDiff = array_diff_assoc($arrCommon, array_unique($arrCommon));

// строка из массива повторных предложений
$textDiff = implode(". ", $arrayDiff);

// запись в файл всех повторов
$text4 = "text4.txt";
file_put_contents($text4, $textDiff);