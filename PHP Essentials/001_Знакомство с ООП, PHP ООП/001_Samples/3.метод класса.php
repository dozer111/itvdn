<?php

class Player
{
    public $name;
    public $lastName;
    public $nickName;

    // метод класса
    public function getFullName()
    {
        // тело метода
        return $this->name.'('.$this->nickName.')'.$this->lastName;
    }
}

$player1 = new Player();
$player1->name = 'Patrick';
$player1->lastName = 'Lindberg';
$player1->nickName = 'fOrest';


// вызов метода
$playerFullName = $player1->getFullName();

echo 'Now I am taking interview with '.$playerFullName;

