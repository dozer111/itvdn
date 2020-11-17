<?php

// пример 2: базовый пример использования конструкции "! instanceof"
class Human{}
class NotHuman{}

$var1 = new Human();


var_dump([
    !$var1 instanceof Human,
    !($var1 instanceof Human)
]);