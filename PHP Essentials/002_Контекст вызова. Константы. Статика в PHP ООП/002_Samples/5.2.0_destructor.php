<?php

class User
{
    public function __destruct()
    {
        echo "User left the system";
    }
}

$user = new User();