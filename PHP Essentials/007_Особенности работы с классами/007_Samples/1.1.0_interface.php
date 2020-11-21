<?php

// интерфейс: базовый пример

// ключевое слово interface
interface Storage
{
    public function save();
    public function delete();
}

class FileStorage implements Storage
{
    // ОБЯЗАТЕЛЬНОЕ переопределение методов интерфейса внутри
    public function save()
    {
        echo "save";
    }

    public function delete()
    {
        echo "delete";
    }
}


























