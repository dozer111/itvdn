<?php

class Status{
    const STATUS_GOOD_USER = 1;
    const STATUS_UGLY_USER = 2;

    private $status;
    private $statuses = [
        self::STATUS_GOOD_USER,
        self::STATUS_UGLY_USER,
    ];

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

    public function setStatus(Status $status)
    {
        $this->status = $status;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(float $age)
    {
        $this->age = $age;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function setBestFriend(self $bestFriend)
    {
        $this->bestFriend = $bestFriend;
    }
}
