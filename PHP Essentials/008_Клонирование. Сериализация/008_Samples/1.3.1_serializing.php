<?php

// сериализация через Serializable

// если класс "реализует" интерфейс Serializable,
// методы __clone/wakeup выполнены не будут, вместо этого будут вызваны методы интерфейса
class User implements Serializable
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

    // для наглядности, подумайте внимательно, что попало бы в сериализированную строку,
    // если бы этот метод сработал
    public function __sleep()
    {
        return [
            'login',
        ];
    }

    public function __wakeup()
    {
        $this->password = 123;
    }


    public function serialize()
    {
        return serialize([
            'log' => $this->login,
            'pass' => $this->password
        ]);
    }

    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->login = $data['log'];
        $this->password = $data['pass'];

        // другие действия ....
        // ....
        // ....
        // ....
    }
}

$user = new User('dozer111','asdasd1',123,'123-444-56');

$serializedData = serialize($user);

var_dump(
    $serializedData
);

var_dump(unserialize($serializedData));




