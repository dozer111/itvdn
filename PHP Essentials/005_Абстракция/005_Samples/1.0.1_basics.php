<?php

// улучшаем код из примера 1
// для начала, свяжем 2 класса вместе

class Calculator{
    public static function substract($val1,$val2)
    {
        return $val1 - $val2;
    }
}

class User{
    public $birthYear;

    public function __construct($birthYear)
    {
        $this->birthYear = $birthYear;
    }

    public function getAge()
    {
        $currentYear = date('Y');
        $userAge = Calculator::substract(
            $currentYear,
            $this->birthYear
        );
        return $userAge;
    }
}

$user = new User(1995);

var_dump($user->getAge());


