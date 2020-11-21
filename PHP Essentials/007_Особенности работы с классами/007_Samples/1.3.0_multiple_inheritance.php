<?php

// множественное наследование интерфейсов
// единственное "чистое" наследование в PHP

interface A
{
    public function getA();
}

interface B
{
    public function getB();
}

// c классами, как мы уже знаем,
// такой трюк не прокатит
interface C extends A, B
{

}


class X implements B
{

    public function getA()
    {

    }

    public function getB()
    {

    }
}




























