<?php

class Color
{
    // ключевое слово const
    // + имя(всё с больших букв(UPPER_CASE)!!)
    const BLACK = '#000';
    const WHITE ='#fff';
    const GOLD = '#FFD700';
}

class Car{
    public $mark;
    public $color;
}

$car1 = new Car();
$car1->mark = 'Toyota';
$car1->color = Color::BLACK;


$car2 = new Car();
$car2->mark = 'Mazda';
$car2->color = Color::GOLD;