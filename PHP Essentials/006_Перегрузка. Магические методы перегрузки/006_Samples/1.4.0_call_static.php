<?php

// учимся полезно использовать "перегрузку"
// Практика с новым магическим методом __callStatic

class User{
    private $login;
    private $password;

    private static $int = 0;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    // данный магический метод должен ОБЯЗАТЕЛЬНО быть статическим
    public static function __callStatic($name, $arguments)
    {
        if($name === 'getNumber')
        {
            $return = self::$int;
            self::$int++;
            return $return;
        }

    }
}

$user = new User('dozer111','asdasd_A_sd');
var_dump(
    $user::getNumber(),//0
    $user::getNumber() // 1
);







