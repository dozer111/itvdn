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
}

class User extends BaseUser{}

// OK
$user1 = new User('dozer111','asdasd');
// НЕ ок =>  Uncaught Error: Cannot instantiate abstract class BaseUser
$user2 = new BaseUser('dozer112','asdasd');
