<?php

// пример 3: как ещё можно работать с "instanceof"
class Human{}
class NotHuman{}

$var1 = new Human();
$var2 = new Human();
$className = 'NotHuman';

var_dump([
    $var1 instanceof Human,
    $var1 instanceof $var2,
    $var1 instanceof $className
]);