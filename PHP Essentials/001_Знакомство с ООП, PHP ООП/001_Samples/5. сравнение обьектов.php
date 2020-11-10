<?php

// сравнение обьектов

class Cat{
    public $name;
    public $age;
}

$cat1 = new Cat();
$cat1->name = 'Sharik';
$cat1->age = 1;

$cat2 = new Cat();
$cat2->name = 'Sharik';
$cat2->age = 1;

$cat3 = new Cat();
$cat3->name = 'Sharik';
$cat3->age = 4;


var_dump(
    [
        $cat1 == $cat2,// true
        $cat1 === $cat2, // false
        $cat1 === $cat3, // false
    ]
);
