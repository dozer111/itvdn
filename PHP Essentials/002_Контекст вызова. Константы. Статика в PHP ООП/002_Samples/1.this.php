<?php

// константы, пример 2

class Color
{
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
// ВЫВОД:
// Вместо того, чтобы "гадать", а правильным ли будет значение "white",
// Мы создаём ряд нужных заготовленных констант, и используем их
// как проверенный источник информации