<?php

// практические примеры контроля типов

// допустимые значения типов для typeHints:
/// int
/// float
/// string
/// bool
/// object
/// имяКласса, или имя интерфейса
/// callable
/// array
/// self
/// iterable



class Status{
    const STATUS_GOOD_USER = 1;
    const STATUS_UGLY_USER = 2;

    private $status;
    private $statuses = [
        self::STATUS_GOOD_USER,
        self::STATUS_UGLY_USER,
    ];

    // 1. int
    public function __construct($status)
    {
        if(!in_array($status,$this->statuses))
        {
            die('Wrong status on Status');
        }
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }
}

class User
{

    private $name;
    private $age;
    private $status;
    private $isActive;
    private $bestFriend;

    // 2. обьект как
    // 2.1 object public function setStatus(object $status)
    // 2.2 непосредственно имя класса
    public function setStatus(Status $status)
    {
        $this->status = $status;
    }

    // 3. string
    public function setName(string $name)
    {
        $this->name = $name;
    }

    // 4. int/float
//    public function setAge(int $age)
    public function setAge(float $age)
    {
        $this->age = $age;
    }

    // 5. bool
    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    // 6. self
    public function setBestFriend(self $bestFriend)
    {
        $this->bestFriend = $bestFriend;
    }
}




