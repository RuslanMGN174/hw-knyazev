<?php

$text = "Добрый день! Немного расскажу о себе. Работаю руководителем по ВЭД. Дополнительно я развиваю и
         поддерживаю корпоративный портал Bitrix24 в компании, в которой работаю.
         Я начинающий разработчик, развиваюсь и буду продолжать развиваться в IT сфере. У меня нет опыта
         коммерческой разработки, есть только учебный, а еще у меня богатый опыт и много полезных компетенций в других
         областях. На текущем месте работы мой руководитель часто отмечает разносторонний и иногда не стандартный
         взгляд на решение задач. Выучился на JS-разработчика в Skillbox, поэтому немного умею в React. Заканчиваю факультет
         Java-разработки в Geekbrains, пишем интернет-магазин на Spring (будет pet-проект), учился Java на курсах JavaRush.
         Быстро учусь и очень хочу работать и расти профессионально в IT.";

$arr = explode(" ", $text);
$arr2 = [];

//echo array_key_exists(0, $arr);

foreach ($arr as $index => $value) {
    if ($index % 2 == 0 && ($value != "" || $value != null)) {
        $arr2[] = "<span class='color1'>" . $value . "</span>";
    } elseif ($index % 2 != 0 && ($value != "" || $value != null)) {
        $arr2[] = "<span class='color2'>" . $value . "</span>";
    } else {
        $arr2[] = $value;
    }
}

echo implode(" ", $arr2);
