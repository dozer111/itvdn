<?php

// закрепляем успех.
// Используем статические свойства класса
// внутри другого класса
class Adidas {
    public static $slogan = 'All or nothing';
}
class Nike {
    public static $slogan = 'Just do it';
}

class DataCenter{
    public function getData()
    {
        return [
            'слоган Adidas' => Adidas::$slogan,
            'слоган Nike' => Nike::$slogan,
        ];
    }
}
