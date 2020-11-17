<?php

// пример 1: наглядное применение конструкции "parent"
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
        // новое ключевое слово "parent"
        // выполнит ИМЕННО родительский метод
        return parent::getName($name);
    }
}

$dog = new Dog();
$dog->getName('Tuzik');