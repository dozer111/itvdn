<?php

// приоритет трейтов

// поскольку трейт "навешивает" поверх существующих свойст/методов, ещё и свои классы/методы, то
// (если не обозначено в коде иного):

/// 1. Сначала классу проставляются свойства/методы трейта
/// 2. Затем класс инициализирует свои родные свойства/методы

// пример 1
trait A{
    public $name = '222';
}

class B {

    use A;

    // ошибка, свойство существует
    public $name = '1asd';

}

// пример 2
trait A2{

    public function getData()
    {
        return 123;
    }
}

class B2 {

    use A2;

    public function getData()
    {
        return 222;
    }
}

$q = new B2();
$q->getData(); // 222 => класс перезаписал метод трейта