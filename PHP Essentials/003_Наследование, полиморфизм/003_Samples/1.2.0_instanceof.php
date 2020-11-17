<?php

// пример 1: базовый пример использования конструкции "instanceof"
class Human{}
class NotHuman{}

$var1 = new Human();
$var2 = new NotHuman();
$var3 = new Human();

var_dump([
    // проверка через имя класса
    $var1 instanceof Human,
    // проверка через имя класса
    $var2 instanceof Human,
    // проверка через екземпляр класса
    $var1 instanceof $var3
]);