<?php

// пример 1: базовый пример позднего статического связывания

class A
{
    protected static $name = 'first';

    public function getName()
    {
        return self::$name;
    }

    public function getCurrentName()
    {
        // новое ключевое слово "static"
        return static::$name;
    }
}

class B extends A
{
    public static $name = 'second';
}

$var = new B();
var_dump(
    $var->getName(), // first
    $var->getCurrentName(), // second
);