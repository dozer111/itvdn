<?php

// sleep VS serialize VS Serializable

// допустим, у нас в классе есть все 4 метода + класс реализует интерфейс
// Приоритет работы
// __serialize()
// Serializable::serialize => не выполнится
// __sleep => не выполнится


// проверяем
class User implements Serializable
{
    protected $login;
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

    // ДА
   public function __serialize(): array
   {
       return [
           'ozzy' => 'ozzborne'
       ];
   }

   // ДА
   public function __unserialize(array $data): void
   {
       $this->login = 'ozzy';
   }

   // НЕТ
    public function serialize()
    {
        return ['asd' => 'asdasd'];
    }

    // НЕТ
    public function unserialize($serialized)
    {
        $this->age = 123456;
    }

    // НЕТ
    public function __sleep()
    {
        return ['password'];
    }

    // НЕТ
    public function __wakeup()
    {
        $this->phone = '888-88-889';
    }

}

$user = new User('dozer111','asdasd1',123,'123-444-56');

$serializedData = serialize($user);

var_dump(
    $serializedData,
    unserialize($serializedData)
);





