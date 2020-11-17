<?php

// Оператор разрешения области видимости
class Phone
{
    const IPHONE = 'iphone';
    const APPLE = 'iphone';

    public function getPhone()
    {
        $data = rand(1,2);
        if($data == 1)
        {
            // ключевое слово self, :: , значение
            return self::APPLE;
        }
        return self::IPHONE;
    }
}

$phones = new Phone();
$phone1 = $phones->getPhone();
$phone2 = $phones->getPhone();
$phone3 = $phones->getPhone();
