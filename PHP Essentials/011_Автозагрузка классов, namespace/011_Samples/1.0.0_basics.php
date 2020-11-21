<?php

// namespaces


// новое ключевое слово Use
use data\Test1;
use data\Test2;

spl_autoload_register(function (string $className){
    $path = str_replace('\\','/',$className).'.php';
    require_once $path;
});

$data = new Test1();
$data2 = new Test1();

var_dump([
    $data->getData(),
    $data2->getData()
]);



