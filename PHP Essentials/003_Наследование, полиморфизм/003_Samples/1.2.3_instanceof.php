<?php

// пример 4: как ещё можно работать с "instanceof" v2
class Human{}


$var1 = 1;
$var2 = null;
$var3 = fopen('example.txt','a+');

var_dump([
    $var1 instanceof Human,
    $var2 instanceof Human,
    $var3 instanceof Human,
    // до 7.3 Ошибка
    false instanceof Human,
    // 7.3+ => отработает
    false instanceof Human,
]);