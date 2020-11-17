<?php

// пример 5: "instanceof" + наследуемые классы
class Human{}
class SuperHuman extends Human{}
class MegaHuman extends SuperHuman{}

$me = new Human();
$tonyStark = new MegaHuman();

// тут сюрпризов нет
var_dump([
    $me instanceof Human, // true
    $me instanceof SuperHuman, // false
    $me instanceof MegaHuman, // false
]);
// а тут есть)
var_dump([
    $tonyStark instanceof Human, // true
    $tonyStark instanceof SuperHuman, // true
    $tonyStark instanceof MegaHuman, // true
]);

// ВЫВОД: instanceof покажет, что обьект класса наследник не только
// своего класса, но и всех классов, которые находятся "выше" по иерархии




