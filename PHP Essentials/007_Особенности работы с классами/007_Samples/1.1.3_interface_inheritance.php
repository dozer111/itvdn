<?php

// множественное наследование интерфейсов

interface A{
    public function getA();
}
interface B {
    public function getB();
}
interface C extends A,B{

}


class X implements B{

    public function getA(){

    }
    public function getB(){

    }
}




























