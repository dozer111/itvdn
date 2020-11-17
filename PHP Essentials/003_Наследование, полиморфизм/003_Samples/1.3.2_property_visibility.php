<?php

// пример 3: области видимости + наследование

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

    public function getData()
    {
        return [
            $this->friendsName,
            $this->secret // FATAL ERROR, приватная переменная не передалась в класс User
            // сейчас, класс User не имеет такой переменной
        ];
    }

}

$user = new User();
$user->getData();
