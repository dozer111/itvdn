<?php

// пример 3: parent внутри parent, внутри parent ....
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
        $name = parent::getName($name);
        return "I am good boy ".$name;
    }
}

class Alabay extends Dog
{
    public function getName($name)
    {
        $name = parent::getName($name);
        return str_replace('I am ','I am HUUUUUUUGE ',$name);
    }
}



$dog = new Dog();
$dog->getName('Tuzik'); // I am good boy Tuzik

$dog2 = new Alabay();
// сначала выполнился getName() у Dog
// Dog вызвал в свою очередь Animal->getName()
$dog2->getName('Aron'); // I am HUUUUUUUGE good boy Aron
