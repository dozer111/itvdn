<?php

class Country
{
    // ключевые слова
    // public , static
    public static function getDefaultName()
    {
        return 'Nigeria';
    }
}

// вызов имяКласса::имяМетода()
echo "Now we are speaking about ". Country::getDefaultName();










