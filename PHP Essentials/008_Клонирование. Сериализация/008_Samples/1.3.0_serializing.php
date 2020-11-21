<?php

// сериализация __sleep/__wakeup


class User
{
    protected $password;
    protected $age;
    protected $phone;

    public function __construct($login,$password,$age = null,$phone = null)
    {
        $this->login = $login;
        $this->password = $password;
        $this->age = $age;
        $this->phone = $phone;
    }

    // новый магический метод
    // должен возвратить массив с именами всех переменных этого объекта, которые должны быть сериализованы
    public function __sleep()
    {
        return [
            'login',
            'age',
            'phone'
        ];
    }

    // новый магический метод
    // делает дополнительные действия над обьектом, которые могут понадобится при "десериализации"
    // прим: восстановить доступ к базе, ...
    public function __wakeup()
    {
        $this->password = 123;
    }
}

$user = new User('dozer111','asdasd1',123,'123-444-56');
$s = serialize($user);
echo "<pre>";
var_dump(
    $s,
            unserialize($s)
);




