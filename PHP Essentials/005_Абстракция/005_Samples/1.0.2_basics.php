<?php

// улучшаем код из примера 2
// делаем вычисление возраста более наглядными
class DateCalculator{
    protected $currentYear;

    public function __construct($currentYear = null)
    {
        if(!$this->currentYear)
        {
            $currentYear = date('Y');
        }

        $this->currentYear = $currentYear;
    }

    public function substract($anotherYear)
    {
        return $this->currentYear - $anotherYear;
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
        $calculator = new DateCalculator();
        $userAge = $calculator->substract($this->birthYear);
        return $userAge;
    }
}

$user = new User(1995);

var_dump($user->getAge());