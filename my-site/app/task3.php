<?php

setlocale(LC_ALL, "ru_RU.UTF-8");

//читаем файл Index.php в строку
function getParseStr(string $filePath): string
{
    $str = "";
    $file = fopen($filePath, "r") or die("не удалось открыть файл");
    while (!feof($file)) {
        $str .= preg_replace(
            "/[^a-zа-яё]/iu",
            " ",
            strip_tags(fgets($file)));
    }
    fclose($file);
    return $str;
}

$str = getParseStr("../../my-site/index.php");

//позиция начала текста (все после php кода)
$position = mb_strpos($str, "Л") . "\n";

//все после php кода в строку
$str = mb_substr($str, $position, mb_strrpos($str, ''));

//удаляем все пустые элементы массива
function getArr(string $str): array
{
    $arr = explode(" ", $str);
    $arr2 = [];
    foreach ($arr as $key => $value) {
        if (trim($value) != null) {
            $arr2[] .= $value;
        }
    }
    return $arr2;
}

$arr = getArr($str);

//регулярка для гласных букв
$regexp = "/[аеёиоуыэюя]/iu";

$count = preg_match_all($regexp, $str);

echo "Количество слов - " . sizeof($arr) . "\n";
echo "Количество гласных - " . $count . "\n";