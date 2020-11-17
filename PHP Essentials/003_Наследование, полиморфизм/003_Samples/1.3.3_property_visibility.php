<?php

// пример 4.1: области видимости + наследование

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


class User extends Human{

    private $secret = 'anotherSecret';

    public function getData()
    {
        return [
            $this->friendsName,
            $this->secret
        ];
    }

}

$user = new User();
var_dump(
    $user->getSecret() // secret)
);
// ВЫВОД: приватное свойство не перезаписалось в наследнике
// Потому что по-сути, это 2 абсолютна разных свойства