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
            // FATAL ERROR, приватная переменная не передалась в класс User
            // сейчас, класс User не имеет такой переменной
            $this->secret

        ];
    }

}

$user = new User();
$user->getData();
