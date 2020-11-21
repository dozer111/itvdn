<?php

// углубляемся в логику работы трейтов
// особенности переопределение методов через трейты


// методы из текущего класса переопределяют методы трейта,
// которые в свою очередь переопределяют методы из базового класса.
class Hello {
    public function sayHello() {
        return "Hello friend";
    }
}

trait SayWorld {
    public function sayHello() {
        // если бы мы здесь не выполнили parent, трейт бы просто перезаписал
        // родительскую реализацию на свою
        return parent::sayHello().', also hello from trait';
    }
}

class MyHelloWorld extends Hello {
    use SayWorld;
}

$o = new MyHelloWorld();
echo $o->sayHello(); //Hello friend, also hello from trait