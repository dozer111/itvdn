<?php

// Разрешение конфликта имён в трейтах
// 1. => а что, если у меня есть метод в трейте, и метод в классе, и я хочу использовать оба

trait T1{
    public function getData()
    {
        return 'some data 1';
    }
}

class C1 {

    use T1 {
        // метод с трейта, который нужно переименовать "as" новое имя
        T1::getData as traitGetData;
    }

    public function getData()
    {
        return [1,2,3,4];
    }
}

$example1 = new C1();
var_dump(
    $example1->getData(),
    $example1->traitGetData()
);

// 1.1 Попрактикуемся с большим к-вом трейтов

trait T_20{
    public function getData()
    {
        return 'some data 1';
    }
}

trait T_21{
    public function getData()
    {
        return 222;
    }
}

class C2 {

    use T_20,T_21 {
        T_20::getData as traitGetData;
        T_21::getData as trait2GetData;
    }

    public function getData()
    {
        return [1,2,3,4];
    }
}

$example2 = new C2();
var_dump(
    [
        $example2->getData(),
        $example2->traitGetData(),
        $example2->trait2GetData()
    ]

);

// 2. Ок, теперь берём ситуацию, что трейт действительно расширяет функционал класса,
// и в нём не было таких же методов

trait T_30{
    public function getData()
    {
        return 'some data 1';
    }
}

trait T_31{
    public function getData()
    {
        return 222;
    }
}

class C3 {

    // теперь у нас конфликт методов
    // класс не знает, какой же ему здесь использовать
    // если ничего не сделать, будет:
    // Fatal error: Trait method getData has not been applied, because there are collisions with other trait methods


    // use T_30,T_31;



    // чтобы решить проблему, мы должны указать, какой же именно из 2х
    // метод будет использоватся,
    // а второму дать алиас, как мы делали ранее
    use T_30,T_31{
        T_30::getData insteadof T_31;
        T_31::getData as getDataFromTrait;
    }


}

$example3 = new C3();
var_dump(
    [
        $example3->getData(),
        $example3->getDataFromTrait()
    ]

);