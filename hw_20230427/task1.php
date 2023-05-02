<?php

$str = "Hello, world! I'm Ruslan";
$str_object = fopen("hello.txt", "w");
fwrite($str_object, $str);
fclose($str_object);