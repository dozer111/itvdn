<?php

// getter-ы/setter-ы

class User{
    private $username;
    private $phone;

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

$user = new User();
// OK
$user->setPhone(12345);
$user->setUsername(12345);

$user2 = new User();
// FATAL ERROR, потому что методы приватны, и по коду видно, что с ними можно
// взаимодействовать только через "геттеры", и "сеттеры"
$user2->username = 'asd';
$user2->phone = 12322;