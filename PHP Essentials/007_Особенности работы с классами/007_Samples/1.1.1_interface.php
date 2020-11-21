<?php

// несколько интерфейсов с одним классом

interface Storage
{
    public function save();
    public function delete();
}

interface Identity
{
    public function getIdentity();
}

interface Cache
{
    public function getOrSet();
}

// ОБЯЗАТЕЛЬНОЕ переопределение ВСЕХ методов каждого интерфейса внутри
class FileStorage implements Storage,Identity,Cache
{
    public function save()
    {
        echo "save";
    }

    public function delete()
    {
        echo "delete";
    }

    public function getIdentity()
    {
        echo 'getIdentity';
    }

    public function getOrSet()
    {
        // нам не обязательно что-то делать внутри метода
        // интерфейс "заставляет" нас, чтобы этот метод в классе был
        // а что внутри - это уже вопрос другой
    }
}


























