<?php

// пример 1: работа с абстрактным классом

// ключевое слово abstract
abstract class BaseUser
{
    protected $login;
    protected $password;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    // ключевое слово abstract
    abstract public function getData();
}

class User extends BaseUser{

    /// Теперь, в наследнике нам нужно реализовать все абстрактные методы
    /// Иначе:
    /// Fatal error: Class User contains 1 abstract method and must therefore be declared

    /// Убираем приставку "abstract"
    public function getData()
    {
        return [
            $this->login,$this->password
        ];
    }
}

$user1 = new User('dozer111','asdasd');
var_dump($user1->getData());
