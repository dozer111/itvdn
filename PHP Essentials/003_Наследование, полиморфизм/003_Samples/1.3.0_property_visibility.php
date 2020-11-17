<?php

// пример 1: базовый пример применения области видимости

class Human
{
    public $name = 'Alex';
    protected $friendsName = 'Max';
    private $secret = 'secret)';
}

$me = new Human();
var_dump([
    $me->name,
    // FATAL ERROR => уровень видимости "protected"
    $me->friendsName,
    // FATAL ERROR => уровень видимости "private"
    $me->secret
]);

/// ВЫВОД: с наружи можно получить ТОЛЬКО "public"