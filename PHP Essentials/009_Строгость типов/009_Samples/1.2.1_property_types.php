<?php


// в PHP 7.4 появилась возможность задавать свойствам типы данных и констант


// было
class Was
{
    const DEFAULT_NAME = 'asdasd';
    const DEFAULT_AGE = 0;

    public $name;
    public $age;
    public $bestFriend;

    public $someOtherData = null;
}

// PHP 7.4
class Now
{
    public const DEFAULT_NAME = 'asdasd';
    public const DEFAULT_AGE = 0;

    public string $name;
    public int $age;
    public self $bestFriend;

    public ?array $someOtherData;
}


