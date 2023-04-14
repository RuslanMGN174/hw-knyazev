<?php

$asd = fopen("../../my-site/index.php", "r") or die("не удалось открыть файл");
while(!feof($asd))
{
    $str = strip_tags(fgets($asd));
    echo trim($str);
}
fclose($asd);