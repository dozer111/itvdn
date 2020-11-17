<?php

// пример 5: области видимости + их изменение в наследнике

class Human
{

    public function getFriends()
    {

    }

    public function getSecret()
    {

    }

    protected function getSecret2()
    {

    }

    protected function getSecret3()
    {

    }

}


class User extends Human{

    // ОК, метод в классе-наследнике имеет как минимум такой же уровень видимости
    public function getFriends()
    {

    }

    // ОК, метод в классе-наследнике имеет как минимум такой же уровень видимости
    public function getSecret()
    {

    }

    // ОК, метод в классе-наследнике имеет уровень видимости выше родитель
    public function getSecret2()
    {

    }

    // FATAL ERROR, метод в классе-наследнике имеет слишком низкий(для текущего контекста) уровень видимости
    private function getSecret3()
    {

    }
}
