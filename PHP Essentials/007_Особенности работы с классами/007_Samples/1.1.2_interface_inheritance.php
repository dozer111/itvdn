<?php

// наследование интерфейсов

interface A{
    public function getA();
}
interface B extends A{
    public function getB();
}


class X implements B{

    public function getA(){

    }
    public function getB(){

    }
}




























