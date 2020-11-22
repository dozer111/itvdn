<?php

// типичный пример использования рефлексии

require_once 'vendor/autoload.php';


use app\data\ClassAnalyzer;
use MyCLabs\Enum\Enum;


$className1 = DateTime::class;
$className2 = Enum::class;

$analyzer1 = new ClassAnalyzer($className1);
$analyzer2 = new ClassAnalyzer($className2);

echo $analyzer1->showPropMeth();
echo "<hr/>";
echo $analyzer2->showPropMeth();