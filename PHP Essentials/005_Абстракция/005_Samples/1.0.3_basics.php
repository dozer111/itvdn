<?php

// улучшаем код из примера 3

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

    private $birthYear;
    private $calculator;

    public function __construct($birthYear,$dateCalculator = null)
    {
        if(!$dateCalculator)
        {
            $dateCalculator = new DateCalculator();
        }
        $this->calculator = $dateCalculator;

        $this->birthYear = $birthYear;
    }

    public function getAge()
    {
        $userAge = $this->calculator->substract($this->birthYear);
        return $userAge;
    }
}

$user = new User(1995);

var_dump($user->getAge());