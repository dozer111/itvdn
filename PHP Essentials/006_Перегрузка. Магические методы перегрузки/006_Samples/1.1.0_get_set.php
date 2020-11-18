<?php

// учимся полезно использовать "перегрузку"
// Практика с новыми магическими методами __set/__get

class User{
    // допустим, у нас нет возможности как-то вытянуть эти данные,
    // а $user->login = 'vasiaPupkin' сделать хочется
    private $login;
    private $password;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function __set($name, $value)
    {
        if(!property_exists($this,$name))
        {
            die('Такого свойства не существует');
        }

        $this->$name = htmlentities($value);
    }

    public function __get($name)
    {
        if(!property_exists($this,$name))
        {
            die('Такого свойства не существует');
        }

        return html_entity_decode($this->$name);
    }
}

// и теперь, мы можем безопасно записать значение в класс
$user = new User('dozer111','asdasd_A_sd');


// Наглядный пример 1:

// FATAL ERROR - не будет, хотя я вызываю приватные свойства
// потому что снаружи их не видно
// а значит, я обращаюсь к тому, чего нет
// а значит - пора вызывать __get()
var_dump(
    $user->login,
            $user->password
);

// Наглядный пример 2:

// код всё так же работает, по всё той же логике:
// нет свойства - вызываем магический метод __set()
$user->login = "<script>alert!alert!</script>";
$user->password = "asdasd2";
var_dump(
    $user->login,
    $user->password
);




