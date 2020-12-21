<?php

// $this - ссылка на обьект
// отображает данные, доступные в
// "контексте текущего обьекта"
class User
{
    public $name;
    public $age;
    public $friend;

    public function getData()
    {
        $data = [];
        if ($this->friend)
        {
            $data = $this->friend->getData();
        }
        return array_merge($data,[
            $this->name,$this->age
        ]);
    }
}

$me = new User();
$friend = new User();
$me->name = 'alex';
$me->age = 123;
$friend->name = 'max';
$friend->age = 1234;
$me->friend = $friend;
$me->getData();
// ВЫВОД: $me и $friend имеют свои контексты,
// $this ссылается именно на вызывающий его класс
// ИМЕННО ПОЭТОМУ, у меня свои данные, у $this->friend - свои