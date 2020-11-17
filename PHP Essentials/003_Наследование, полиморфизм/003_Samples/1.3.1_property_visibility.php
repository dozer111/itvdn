<?php

// пример 2: базовый пример применения области видимости

class Human
{
    public $name = 'Alex';
    protected $friendsName = 'Max';
    private $secret = 'secret)';

    public function getFriends()
    {
        return [$this->friendsName];
    }

    public function getSecret()
    {
        return $this->secret;
    }

}



$me = new Human();
var_dump([
    $me->name,
    $me->friendsName,// FATAL ERROR
    $me->secret,// FATAL ERROR
    $me->getFriends(), // работает
    $me->getSecret(), // работает
]);

/// ВЫВОД: с наружи можно получить ТОЛЬКО "public"
/// Благодаря "$this" мы можем подготовить+прокинуть себе
/// защищённые(по какой-то причине) через публичный метод