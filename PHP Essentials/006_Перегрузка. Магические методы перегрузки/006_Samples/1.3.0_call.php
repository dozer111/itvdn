<?php

// учимся полезно использовать "перегрузку"
// Практика с новым магическим методом __call

class User{
    // допустим, у нас всё ещё нет возможности как-то вытянуть эти данные,
    private $login;
    private $password;

    public $age = 123;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function __call($name, $arguments)
    {
        if($name === 'getData')
        {

            return [
                $this->login,$this->password,
            ];
        }
        die('__call:Такого метода не существует');
    }
}

$user = new User('dozer111','asdasd_A_sd');
var_dump($user->getData());







