<?php

class User{
    public function __construct()
    {
        echo "User log in application";
    }

    public function __destruct()
    {
        echo "User left application";
    }

    public function doSmth()
    {
        echo "User doing some things";
    }
}

$user = new User();
$user->doSmth();



