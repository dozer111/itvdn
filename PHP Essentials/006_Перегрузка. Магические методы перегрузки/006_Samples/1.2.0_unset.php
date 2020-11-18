<?php

// учимся полезно использовать "перегрузку"
// Практика с новым магическим методом __unset

class User{
    // допустим, у нас всё ещё нет возможности как-то вытянуть эти данные,
    private $login;
    protected $password;

    public $age = 123;

    public function __construct($login,$password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function __get($name)
    {
        if($name !== 'loginn' && !property_exists($this,$name))
        {
            die('__get:Такого свойства не существует');
        }
        return $this->$name;
    }

    public function __unset($name)
    {
        if(!property_exists($this,$name))
        {
            die('__unset:Такого свойства не существует');
        }
        $this->$name = null;
    }
}

// и теперь, мы можем безопасно записать значение в класс
$user = new User('dozer111','asdasd_A_sd');
$user->loginn = 123;

var_dump(
    $user->loginn,
            $user->password
);

// фактически он удалил то, чего нет
unset($user->loginn);
unset($user->age);
unset($user->password);

var_dump(
    [
        $user->loginn, // NOTICE Undefined property
        $user->password, // null, потому что здесь мы не удаляли свойство, а заменили значение на null
        $user->age // NOTICE Undefined property
    ]
);





