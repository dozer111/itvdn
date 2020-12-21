<?php

// Конструктор

// было
class User{
    public $name;
    public $age;

    public function create($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User();
$user->create("Ozzy",123);

// стало
class User{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User("Ozzy",123);

var_dump([
    $user->name,
    $user->age
]);