<?php

///  пример 1: базовые обяснения принципа инкапсуляции

/// Закрытие - свойства и методы "закрываются" внутри контекста класса
/// Сокрытие - часть логики намеренно скрывается, и остаётся только то,
///  что "должно быть"

class User
{
    // ЗАКРЫТЫЕ внутри контекста класса свойства
    public $name;
    public $age;
    public $phone;


    public function getData()
    {
        return [
            'name' => $this->getName(),
            'age' => $this->age,
            'phone' => $this->phone
        ];
    }

    // СОКРЫТАЯ логика класса
    protected function getName()
    {
        return trim($this->name);
    }
}