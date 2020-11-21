<?php

// углубляемся в клонирование обьекта

class User
{
    const STATUS_REGISTERED = 1;
    const STATUS_NOT_REGISTERED = 2;

    public $name;
    public $sur;

    protected $status;

    public function __construct($name,$sur)
    {
        $this->name = $name;
        $this->sur = $sur;
        $this->status = self::STATUS_REGISTERED;
    }

    // новый магический метод __clone
    public function __clone()
    {
        $this->status = self::STATUS_NOT_REGISTERED;
    }
}

$user1 = new User('alex','khonko');

$user2 = clone $user1;
$user2->name = 'Vasyl';
$user2->sur = 'Surname';


