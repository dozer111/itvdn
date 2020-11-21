<?php


// практические примеры контроля возвращаемых типов

/// До PHP 7
/// array
/// className/interfaceName
/// callable
/// self

/// PHP 7.0
/// Скалярные типы
/// int
/// float
/// bool
/// string

/// PHP 7.1
/// ?<typeName>
/// iterable
/// : void

/// PHP 7.2
/// object

class X{
    // < 7.0
    public function setData1(self $q){}
    public function setData11(array $q){}
    public function setData2(callable $callable){}
    public function setData21(Iterable $q){}
    public function setData22(DateTime $q){}

    // 7.0
    public function setData41(bool $q){}
    public function setData42(int $q){}
    public function setData43(float $q){}
    public function setData44(string $q){}

    // 7.1
    public function setData3(?int $q){}
    public function setData31(iterable $q){}

    // 7.2
    public function setData4(object $q){}
}


