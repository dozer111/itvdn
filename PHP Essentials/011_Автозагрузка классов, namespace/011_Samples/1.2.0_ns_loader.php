<?php

// загрузка ns со стороннего файла
// именно так в реальной жизни это и делается/работает
require_once 'helpers/ns_loader.php';

use data\Test1;
use data\Test2;



$data = new Test1();
$data2 = new Test1();

var_dump([
    $data->getData(),
    $data2->getData()
]);



