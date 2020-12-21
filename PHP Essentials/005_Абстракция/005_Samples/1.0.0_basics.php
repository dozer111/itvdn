<?php

// код без абстракций - набор независимых классов

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
}

$user = new User(1995);
$currentYear = date('Y');
$userAge = Calculator::substract(
    $currentYear,
    $user->birthYear
);

var_dump($userAge);