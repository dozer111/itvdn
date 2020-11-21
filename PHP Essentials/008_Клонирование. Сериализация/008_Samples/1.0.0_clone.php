<?php

// клонирование обьекта

class User
{
    public $name;
    public $sur;

    public function __construct($name,$sur)
    {
        $this->name = $name;
        $this->sur = $sur;
    }
}

$user1 = new User('alex','khonko');

// упс, тут ошибка, почему?
$user2 = $user1;
$user2->name = 'Iiigor';


// новое ключевое слово "clone"
$user3 = clone $user1;
$user3->name = 'Vasyl';
$user3->sur = 'Surname';

// ВЫВОД:
// клонирование обьекта даёт нам "копию", а не "ссылку" обьекта


