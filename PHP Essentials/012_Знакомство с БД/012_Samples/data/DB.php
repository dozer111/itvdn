<?php

namespace data;

use PDO;

class DB
{
    private static $_instance = null;
    private static $_connection;
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'itvdn';
    private const DB_USER = 'root';
    private const DB_PASS = 'password';

    private function __construct()
    {
        static::$_connection = new PDO(
            'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME,
            self::DB_USER,
            self::DB_PASS,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
        );

    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): self
    {
        if (!static::$_instance) {
            static::$_instance = new static();
        }

        return static::$_instance;
    }

    public function getConnection(): PDO
    {
        return static::$_connection;
    }
}
