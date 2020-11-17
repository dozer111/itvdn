<?php

// пример 2: закрепляем успех, модифицируем родительский метод
class Animal
{
    public function getName($name)
    {
        return $name;
    }
}

class Dog extends Animal
{
    public function getName($name)
    {
        // выполнит ИМЕННО родительский метод
        $name = parent::getName($name);
        return "I am good boy ".$name;
    }
}

$dog = new Dog();
$dog->getName('Tuzik'); // I am good boy Tuzik
