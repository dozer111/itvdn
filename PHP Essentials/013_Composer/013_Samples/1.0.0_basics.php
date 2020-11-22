<?php

// composer - менеджер зависимостей

// 1. устанавливаем => composer init
// 2. скачиваем первую библиотеку => composer require symfony/var-dumper
// 3. подключаем autoloader

require_once '../vendor/autoload.php';

$data = [1, 2, 3, 4];

// тестируем новенькую библиотеку

var_dump($data);
dump($data);