<?php

class User{

    public static function getClassName()
    {
        return "User";
    }

    public function isUser($className)
    {
        // self::имяСтатическогоМетода()
        return self::getClassName() == $className;
    }
}

$user1 = new User();
var_dump(
    $user1->isUser('Asdadsaasd'), // false
    $user1->isUser('User'),  // true
    $user1->isUser(User::getClassName())// true
);



