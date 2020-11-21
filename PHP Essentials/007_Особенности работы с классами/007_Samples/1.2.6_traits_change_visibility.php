<?php

// изменеине области видимости метода с трейта внутри класса

trait A
{
    public function getData()
    {

    }
}

class B
{
    use A
    {
        // вот так выглядит этот трюк
        getData as protected;
    }
}