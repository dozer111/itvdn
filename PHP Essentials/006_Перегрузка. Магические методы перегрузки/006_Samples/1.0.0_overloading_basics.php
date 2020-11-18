<?php

// пример 1 "перезрузки" в PHP ООП

class A
{

}
$var = new A();
// 1. присваиваем несуществующие свойства
$var->ozzy = 'ozzborne';
$var->data = 'asdasd';

var_dump([
    // 2. достаём несуществующие свойства
    $var->ozzy,
    $var->data,
    // 3. вызываем несуществующий метод
    $var->dodo()
]);






class User{
    private $login;
    private $password;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }
}


